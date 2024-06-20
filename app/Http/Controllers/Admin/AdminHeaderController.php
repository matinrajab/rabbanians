<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HeaderRequest;
use App\Models\Header;

class AdminHeaderController extends Controller
{
    public function show()
    {
        $header = Header::first();
        return view('admin.header.index', ['header' => $header]);
    }

    public function edit()
    {
        $header = Header::first();
        return view('admin.header.edit-header', ['header' => $header]);
    }

    public function update(HeaderRequest $request)
    {
        $header = Header::first();
        $header->update($request->all());

        return redirect(route('admin.header.show'));
    }
}
