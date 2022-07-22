<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home()
    {
        $banners = Banner::where('status', 'active')->get();
        return view('front.home', compact('banners'));
    }

    public function about_us()
    {
        return view('front.about-us');
    }

    public function industries()
    {
        return view('front.industries');
    }

    public function contact_us()
    {
        return view('front.contact-us');
    }

    public function data_destruction()
    {
        return view('front.data-destruction');
    }

    public function end_of_life_cycle_processing()
    {
        return view('front.end-of-life-cycle-processing');
    }

    public function it_asset_remarketing()
    {
        return view('front.it-asset-remarketing');
    }

    public function it_disposition()
    {
        return view('front.it-disposition');
    }

    public function re_manufacturer()
    {
        return view('front.re-manufacturer');
    }

    public function remarketing()
    {
        return view('front.remarketing');
    }
}
