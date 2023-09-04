<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Themeparks;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        $data = Bookings::with('customer', 'themepark')->get();
        $total = DB::table("bookings")->get()->sum("total_price");

        
        return view('bookings.index',compact('data','total'));
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = User::whereRoleIs('customer')->pluck('name','id');
        $themeparks = Themeparks::pluck('park_name', 'id');

        return view('bookings.create', compact('themeparks','customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $park_price = DB::table('themeparks')->find($request->park)->park_price;
        $quan = $request->quantity;
        
        DB::table('bookings')->insert([
            'cust_id' => $request->customer,
            'park_id' => $request->park,
            'quantity' => $request->quantity,
            'date' => $request->date,
            'total_price' => $park_price * $quan,
        ]);
   
        return redirect()->route('bookings.create')  
            ->with('success','Booking is added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bookings  $bookings
     * @return \Illuminate\Http\Response
     */
    public function show(Bookings $booking)
    {
        return view('bookings.show',compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bookings  $bookings
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookings $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bookings  $bookings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookings $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bookings  $bookings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookings $booking)
    {
        $booking->delete();

        return redirect()->route('bookings.index')
                        ->with('success','The booking record is deleted successfully.');
    }
}
