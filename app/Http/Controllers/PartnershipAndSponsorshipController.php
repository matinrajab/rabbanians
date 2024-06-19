<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\PartnershipAndSponsorship;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class PartnershipAndSponsorshipController extends Controller
{
    public function showPartnership()
    {
        $partnership = PartnershipAndSponsorship::find(1);
        $partners = Partner::orderByDesc('id')->get();
        return view('user.partnership.partnership', compact('partnership', 'partners'));
    }

    public function showSponsorship()
    {
        $sponsorship = PartnershipAndSponsorship::find(2);
        $sponsors = Sponsor::orderByDesc('id')->get();
        return view('user.partnership.sponsorship', compact('sponsorship', 'sponsors'));
    }
}
