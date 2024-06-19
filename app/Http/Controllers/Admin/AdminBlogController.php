<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminBlogController extends Controller
{
    private const DIR = 'files/blog/';
    private $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function index()
    {
        $blogs = Blog::orderByDesc('id')->get();
        return view('admin.blog.index', ['blogs' => $blogs]);
    }

    public function create()
    {
        return view('admin.blog.add-blog');
    }

    public function store(BlogRequest $request)
    {
        $file = $request->file('image');
        $image = $this->fileService->handleFileUpload($file, self::DIR);

        $data = $this->fileService->prepareData($request, $image);
        Blog::create($data);

        return redirect('/admin/blogs');
    }

    public function show(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.blog-details', ['blog' => $blog]);
    }

    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit-blog', ['blog' => $blog]);
    }

    public function update(BlogRequest $request, string $id)
    {
        $blog = Blog::findOrFail($id);
        $file = $request->file('image');

        $blog->image = $this->fileService->handleFileUpdate($file, $blog->image, self::DIR);
        $blog->update($request->except(['image']));

        return redirect('/admin/blogs/' . $id);
    }

    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);

        File::delete(self::DIR . $blog->image);
        $blog->delete();

        return redirect('/admin/blogs');
    }
}
