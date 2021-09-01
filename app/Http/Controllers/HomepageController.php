<?php

namespace App\Http\Controllers;

use App\Models\AboutUsPage;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class HomepageController extends Controller
{


    public function index()
    {
        $sliders = Slider::with(['media'])->get();
        $services = Service::with(['media'])->get();
        $experts = User::with(["roles", "media"])->whereHas("roles", function ($query) {
            $query->where("id", 3);
        })->get();
        $blogs = Blog::with(['media'])->get();
        return view('welcome', compact('sliders', 'services', 'experts', 'blogs'));
    }


    // create bookings
    public function createBookings(Request $request)
    {
        Booking::create($request->all());
        return redirect()->back()->with("success", "Reservation successfull");
    }


    public function allServices()
    {
        $services = Service::with(['media'])->get();
        return view('services', compact('services'));
    }

    public function about()
    {
        $aboutUsPages = AboutUsPage::orderBy("id", 'desc')->limit(1)->get();
        return view('about', compact('aboutUsPages'));
    }


    public function gallery()
    {

        $galleries = Gallery::with(['media'])->get();
        return view('gallery', compact('galleries'));
    }


    public function experts()
    {
        $experts = User::with(["roles", "media"])->whereHas("roles", function ($query) {
            $query->where("id", 3);
        })->get();
        return view('experts', compact('experts'));
    }

    public function blog()
    {
        $blogs = Blog::with(['media'])->get();
        return view('blogs', compact('blogs'));
    }

    public function blogDetails($id)
    {
        $blog = Blog::with(['media'])->findOrFail($id);
        return view('blog-details', compact('blog'));
    }

    public function serviceDetails($id)
    {
        $service = Service::with(['media'])->findOrFail($id);
        return view('services-details', compact('service'));
    }
}
