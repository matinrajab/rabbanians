<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartnershipAndSponsorshipRequest;
use App\Models\Partner;
use App\Models\PartnershipAndSponsorship;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class AdminPartnershipAndSponsorshipController extends Controller
{
    public function index()
    {
        $partnership = PartnershipAndSponsorship::all();
        $partners = Partner::orderByDesc('id')->get();
        $sponsors = Sponsor::orderByDesc('id')->get();
        return view('admin.partnership.index', compact('partnership', 'partners', 'sponsors'));
    }

    public function edit(string $id)
    {
        $partnership = PartnershipAndSponsorship::findOrFail($id);
        return view('admin.partnership.edit-partnership', ['partnership' => $partnership]);
    }

    public function update(PartnershipAndSponsorshipRequest $request, string $id)
    {
        $partnership = PartnershipAndSponsorship::findOrFail($id);
        $partnership->update($request->all());

        return redirect('/admin/partnership');
    }
}
