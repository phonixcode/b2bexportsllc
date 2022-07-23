<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Service;
use App\Models\Facility;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home()
    {
        $banners = Banner::where('status', 'active')->get();
        $facilities = Facility::where('status', 'active')->get();
        $services = Service::where('status', 'active')->take(4)->get();
        return view('front.home', compact('banners', 'facilities', 'services'));
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

    public function viewPage($page_slug)
    {
        $page = Service::viewPage($page_slug);

        return (count($page) != 0)
        ? view('front.page', compact('page'))
        : view('errors.404');
    }
}
