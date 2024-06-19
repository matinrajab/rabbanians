<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonialRequest;
use App\Models\Testimonial;
use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminTestimonialController extends Controller
{
    private const DIR = 'files/testimonial/';
    private $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function index()
    {
        $testimonials = Testimonial::orderByDesc('id')->get();
        return view('admin.testimonial.index', ['testimonials' => $testimonials]);
    }

    public function create()
    {
        return view('admin.testimonial.add-testimonial');
    }

    public function store(TestimonialRequest $request)
    {
        $file = $request->file('profile_picture');
        $profile_picture = $this->fileService->handleFileUpload($file, self::DIR);

        $data = $this->fileService->prepareData($request, $profile_picture, 'profile_picture');
        Testimonial::create($data);

        return redirect('/admin/testimonials');
    }

    public function show(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.testimonial-details', ['testimonial' => $testimonial]);
    }

    public function edit(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit-testimonial', ['testimonial' => $testimonial]);
    }

    public function update(TestimonialRequest $request, string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $file = $request->file('profile_picture');

        $testimonial->profile_picture = $this->fileService->handleFileUpdate($file, $testimonial->profile_picture, self::DIR);
        $testimonial->update($request->except(['profile_picture']));

        return redirect('/admin/testimonials/' . $id);
    }

    public function destroy(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        File::delete(self::DIR . $testimonial->profile_picture);
        $testimonial->delete();

        return redirect('/admin/testimonials');
    }
}
