<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::orderBy('order', 'asc')->get();
        return view('user.about_us.meet-team', compact('teams'));
    }
}
