<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderByDesc('id')->get();
        return view('user.event.index', compact('events'));
    }

    public function show(Event $event)
    {
        return view('user.event.event-details', compact('event'));
    }
}
