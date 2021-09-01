<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Booking;
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
        $experts = User::with(['roles', 'media'])->get();
        $blogs = Blog::with(['media'])->get();
        return view('welcome', compact('sliders', 'services', 'experts', 'blogs'));
    }


    // create bookings
    public function createBookings(Request $request)
    {
        Booking::create($request->all());
        return redirect()->back()->with("success", "Reservation successfull");
    }
}
