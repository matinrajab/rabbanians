<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\Event;
use App\Models\Homepage;
use App\Models\Mission;
use App\Models\OpenVolunteer;
use App\Models\Team;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $home = Homepage::first();
        $missions = Mission::all();
        $aboutUs = AboutUs::first();
        $contact = ContactUs::first();
        $teams = Team::limit(5)->get();
        $openVolunteers = OpenVolunteer::orderByDesc('id')->limit(5)->get();
        $events = Event::orderByDesc('id')->limit(3)->get();
        $blogs = Blog::orderByDesc('id')->limit(3)->get();
        return view('admin.dashboard.index', compact('home', 'missions', 'aboutUs', 'contact', 'teams', 'openVolunteers', 'events', 'blogs'));
    }
}
