<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Service;
use App\Models\Barber;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::latest()->get();

        return view('admin.bookings.index', compact('bookings'));
    }

    public function create()
    {
        $services = Service::all();

        $barbers = Barber::all();

        return view('frontend.booking', compact(
            'services',
            'barbers'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required',
            'barber_id' => 'required',
            'tanggal_booking' => 'required',
            'jam_booking' => 'required',
        ]);

        Booking::create([
            'user_id' => 1,
            'service_id' => $request->service_id,
            'barber_id' => $request->barber_id,
            'tanggal_booking' => $request->tanggal_booking,
            'jam_booking' => $request->jam_booking,
            'status' => 'pending',
            'catatan' => $request->catatan
        ]);

        return redirect('/booking')
            ->with('success', 'Booking berhasil dibuat');
    }
}