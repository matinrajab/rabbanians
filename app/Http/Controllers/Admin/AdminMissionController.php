<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MissionRequest;
use App\Models\Mission;
use Illuminate\Http\Request;

class AdminMissionController extends Controller
{
    public function create()
    {
        return view('admin.home.add-mission');
    }

    public function store(MissionRequest $request)
    {
        Mission::create($request->all());

        return redirect('/admin/homepage/edit');
    }

    public function edit(string $id)
    {
        $mission = Mission::findOrFail($id);

        return view('admin.home.edit-mission', ['mission' => $mission]);
    }

    public function update(MissionRequest $request, string $id)
    {
        $mission = Mission::findOrFail($id);
        $mission->update($request->all());

        return redirect('/admin/homepage/edit');
    }

    public function destroy(string $id)
    {
        $mission = Mission::findOrFail($id);
        $mission->delete();

        return redirect()->back();
    }
}
