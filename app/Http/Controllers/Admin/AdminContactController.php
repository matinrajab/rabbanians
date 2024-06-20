<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\ContactUs;
use App\Services\FileService;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function show()
    {
        $contact = ContactUs::first();
        return view('admin.contact.index', ['contact' => $contact]);
    }

    public function edit()
    {
        $contact = ContactUs::first();
        return view('admin.contact.edit-contact', ['contact' => $contact]);
    }

    public function update(ContactRequest $request)
    {
        $contact = ContactUs::first();
        $contact->update($request->all());

        return redirect('/admin/contact');
    }
}
