<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SlideBannerRequest;
use App\Models\SlideBanner;
use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminSlideBannerController extends Controller
{
    private const DIR = 'files/slide_banner/';
    private $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function index()
    {
        $banners = SlideBanner::orderByDesc('id')->get();
        return view('admin.slide_banner.index', ['banners' => $banners]);
    }

    public function show(string $id)
    {
        $banner = SlideBanner::findOrFail($id);
        return view('admin.slide_banner.banner-details', ['banner' => $banner]);
    }

    public function create()
    {
        return view('admin.slide_banner.add-banner');
    }

    public function store(SlideBannerRequest $request)
    {
        $file = $request->file('image');
        $image = $this->fileService->handleFileUpload($file, self::DIR);

        $data = $this->fileService->prepareData($request, $image);
        SlideBanner::create($data);

        return redirect(route('admin.slide-banner.index'));
    }

    public function edit(string $id)
    {
        $banner = SlideBanner::findOrFail($id);
        return view('admin.slide_banner.edit-banner', ['banner' => $banner]);
    }

    public function update(SlideBannerRequest $request, string $id)
    {
        $banner = SlideBanner::findOrFail($id);
        $file = $request->file('image');

        $banner->image = $this->fileService->handleFileUpdate($file, $banner->image, self::DIR);
        $banner->update($request->except(['image']));

        return redirect(route('admin.slide-banner.index'));
    }

    public function destroy(string $id)
    {
        $banner = SlideBanner::findOrFail($id);

        File::delete(self::DIR . $banner->image);
        $banner->delete();

        return redirect(route('admin.slide-banner.index'));
    }
}
