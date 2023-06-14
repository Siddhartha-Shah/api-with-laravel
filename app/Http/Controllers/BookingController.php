<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function BookingDetails(){
        return view("bookings");
    }
    public function getBookingForCustomer(){
        return Booking::with('customer')->get();
    }
    public function getBookingForService(){
        return Booking::with('service')->get();
    }
    public function getBooking(){
        return Booking::all();
    }

}
