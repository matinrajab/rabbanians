<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use App\Models\Homepage;
use App\Models\Mission;
use App\Models\OpenVolunteer;
use App\Models\SlideBanner;
use App\Models\Testimonial;
use App\Models\Value;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $banner = SlideBanner::orderByDesc('id')->get();
        $home = Homepage::first();
        $missions = Mission::all();
        $openVolunteers = OpenVolunteer::orderByDesc('id')->limit(3)->get();
        $events = Event::orderByDesc('id')->limit(3)->get();
        $testimonials = Testimonial::orderByDesc('id')->get();
        return view('user.home.index', compact('banner', 'home', 'missions', 'openVolunteers', 'events', 'testimonials'));
    }
}
