<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomepageController extends Controller
{


    public function index()
    {
        $sliders = Slider::with(['media'])->get();
        $services = Service::with(['media'])->get();
        return view('welcome', compact('sliders', 'services'));
    }


    // create bookings
    public function createBookings(Request $request)
    {
        Booking::create($request->all());
        return redirect()->back()->with("success", "Reservation successfull");
    }
}
