<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Facility;
use App\Models\Industry;
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
        $facilities = Facility::where('status', 'active')->get();
        return view('front.about-us', compact('facilities'));
    }

    public function industries()
    {
        $industries = Industry::where('status', 'active')->get();
        return view('front.industries', compact('industries'));
    }

    public function contact_us()
    {
        return view('front.contact-us');
    }

    public function contact_submit(Request $request)
    {
        $data = $request->all();

        return Contact::create($data)
            ? back()->with('success', 'Enquiry Sent Successfully')
            : back()->with('error', 'Something went wrong!, please try again later');
    }

    public function viewPage($page_slug)
    {
        $page = Service::viewPage($page_slug);

        return (count($page) != 0)
        ? view('front.page', compact('page'))
        : view('errors.404');
    }
}
