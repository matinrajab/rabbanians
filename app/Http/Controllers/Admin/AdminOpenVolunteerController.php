<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OpenVolunteerRequest;
use App\Models\OpenVolunteer;
use App\Models\VolunteerType;
use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminOpenVolunteerController extends Controller
{
    private const DIR = 'files/volunteer/';
    private $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function index()
    {
        $openVolunteers = OpenVolunteer::orderByDesc('id')->get();
        return view('admin.volunteer.index', compact('openVolunteers'));
    }

    public function create()
    {
        $volunteerTypes = VolunteerType::all();
        return view('admin.volunteer.add-open-volunteer', compact('volunteerTypes'));
    }

    public function store(OpenVolunteerRequest $request)
    {
        $file = $request->file('image');
        $image = $this->fileService->handleFileUpload($file, self::DIR);

        $data = $this->fileService->prepareData($request, $image);
        OpenVolunteer::create($data);

        return redirect('/admin/open-volunteer');
    }

    public function show(string $id)
    {
        $openVolunteer = OpenVolunteer::findOrFail($id);
        return view('admin.volunteer.open-volunteer-details', compact('openVolunteer'));
    }

    public function edit(string $id)
    {
        $openVolunteer = OpenVolunteer::findOrFail($id);
        $volunteerTypes = VolunteerType::all();
        return view('admin.volunteer.edit-open-volunteer', compact('openVolunteer', 'volunteerTypes'));
    }

    public function update(OpenVolunteerRequest $request, string $id)
    {
        $openVolunteer = OpenVolunteer::findOrFail($id);
        $file = $request->file('image');

        $openVolunteer->image = $this->fileService->handleFileUpdate($file, $openVolunteer->image, self::DIR);
        $openVolunteer->update($request->except(['image']));

        return redirect('/admin/open-volunteer/' . $id);
    }

    public function destroy(string $id)
    {
        $openVolunteer = OpenVolunteer::findOrFail($id);

        File::delete(self::DIR . $openVolunteer->image);
        $openVolunteer->delete();

        return redirect('/admin/open-volunteer/');
    }
}
