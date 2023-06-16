<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    // public function BookingDetails(){

    //     return view("bookings");
    // }
    public function getBookingForCustomer(){
        return Booking::with('customer')->get();
    }
    public function getBookingForService(){
        return Booking::with('service')->get();
    }
    public function getBooking(){
        return Booking::all();
    }
    public function BookingDetails(Request $request){
    $list = DB::table('bookings')
    ->join('customers', 'bookings.booking_id', '=', 'customers.booking_id')
    ->join('services', 'bookings.booking_id', '=', 'services.service_id')
    ->get();
     return view('bookings',["getData"=>$list]);
    
    }

}
