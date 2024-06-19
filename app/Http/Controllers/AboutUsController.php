<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Achievement;
use App\Models\ContactUs;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $contact = ContactUs::first();
        $aboutUs = AboutUs::first();
        $teams = Team::orderBy('order', 'asc')->limit(3)->get();
        $achievements = Achievement::orderByDesc('id')->get();
        return view('user.about_us.about-us', compact('contact', 'aboutUs', 'teams', 'achievements'));
    }
}
