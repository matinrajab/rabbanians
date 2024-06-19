<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomepageRequest;
use App\Models\Homepage;
use App\Services\FileService;
use App\Models\Mission;

class AdminHomepageController extends Controller
{
    private $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function show()
    {
        $home = Homepage::first();
        $missions = Mission::all();
        return view('admin.home.index', ['home' => $home, 'missions' => $missions]);
    }

    public function edit()
    {
        $home = Homepage::first();
        $missions = Mission::all();
        return view('admin.home.edit-homepage', ['home' => $home, 'missions' => $missions]);
    }

    public function update(HomepageRequest $request)
    {
        $home = Homepage::first();

        $dir = 'files/homepage/';
        $file1 = $request->file('image_1');
        $file2 = $request->file('image_2');

        $home->image_1 = $this->fileService->handleFileUpdate($file1, $home->image_1, $dir);
        $home->image_2 = $this->fileService->handleFileUpdate($file2, $home->image_2, $dir);

        $home->update($request->except(['image_1', 'image_2']));

        return redirect('/admin/homepage');
    }
}
