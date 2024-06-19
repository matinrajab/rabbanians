<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use App\Services\FileService;
use Illuminate\Support\Facades\File;

class AdminGalleryController extends Controller
{
    private const DIR = 'files/gallery/';
    private $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function create(string $eventId)
    {
        return view('admin.event.add-gallery', ['eventId' => $eventId]);
    }

    public function store(GalleryRequest $request, string $eventId)
    {
        $file = $request->file('image');
        $image = $this->fileService->handleFileUpload($file, self::DIR);

        $data = $this->fileService->prepareData($request, $image);
        $data['event_id'] = $eventId;

        Gallery::create($data);

        return redirect('/admin/events/' . $eventId);
    }

    public function edit(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.event.edit-gallery', ['gallery' => $gallery]);
    }

    public function update(GalleryRequest $request, string $id)
    {
        $gallery = Gallery::findOrFail($id);
        $file = $request->file('image');

        $gallery->image = $this->fileService->handleFileUpdate($file, $gallery->image, self::DIR);
        $gallery->update($request->except(['image']));

        return redirect('/admin/events/' . $gallery->event_id);
    }

    public function destroy(string $id)
    {
        $gallery = Gallery::findOrFail($id);

        File::delete(self::DIR . $gallery->image);
        $gallery->delete();

        return redirect()->back();
    }
}
