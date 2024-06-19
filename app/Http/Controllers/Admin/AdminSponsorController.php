<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerSponsorRequest;
use App\Models\Sponsor;
use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminSponsorController extends Controller
{
    private const DIR = 'files/sponsor/';
    private $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function create()
    {
        return view('admin.partnership.add-sponsor');
    }

    public function store(PartnerSponsorRequest $request)
    {
        $file = $request->file('image');
        $image = $this->fileService->handleFileUpload($file, self::DIR);

        $data = $this->fileService->prepareData($request, $image);

        Sponsor::create($data);

        return redirect(route('admin.partnership.index'));
    }

    public function edit(string $id)
    {
        $sponsor = Sponsor::findOrFail($id);
        return view('admin.partnership.edit-sponsor', ['sponsor' => $sponsor]);
    }

    public function update(PartnerSponsorRequest $request, string $id)
    {
        $sponsor = Sponsor::findOrFail($id);
        $file = $request->file('image');

        $sponsor->image = $this->fileService->handleFileUpdate($file, $sponsor->image, self::DIR);
        $sponsor->update($request->except(['image']));

        return redirect(route('admin.partnership.index'));
    }

    public function destroy(string $id)
    {
        $sponsor = Sponsor::findOrFail($id);

        File::delete(self::DIR . $sponsor->image);
        $sponsor->delete();

        return redirect()->back();
    }
}
