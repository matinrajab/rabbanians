<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUsRequest;
use App\Models\AboutUs;
use App\Models\Achievement;
use App\Services\FileService;
use App\Models\Team;

class AdminAboutUsController extends Controller
{
    private const DIR = 'files/about_us/';
    private $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function show()
    {
        $company = AboutUs::first();
        $teams = Team::orderBy('order', 'asc')->get();
        $achievements = Achievement::orderByDesc('id')->get();
        return view('admin.company.index', ['company' => $company, 'teams' => $teams, 'achievements' => $achievements]);
    }

    public function edit()
    {
        $company = AboutUs::first();
        return view('admin.company.edit-company', ['company' => $company]);
    }

    public function update(AboutUsRequest $request)
    {
        $company = AboutUs::first();
        $file = $request->file('image');

        $company->image = $this->fileService->handleFileUpdate($file, $company->image, self::DIR);
        $company->update($request->except(['image']));

        return redirect(route('admin.about-us.show'));
    }
}
