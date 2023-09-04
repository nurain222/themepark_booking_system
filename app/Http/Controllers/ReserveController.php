<?php

namespace App\Http\Controllers;


use App\Models\Bookings;
use App\Models\Themeparks;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Themeparks::all();
        return view('reserve.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $themeparks = Themeparks::pluck('park_name', 'id');

        return view('reserve.create', compact('themeparks'));
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
            'cust_id' => auth()->user()->id,
            'park_id' => $request->park,
            'quantity' => $request->quantity,
            'date' => $request->date,
            'total_price' => $park_price * $quan,
        ]);

        return redirect()->route('reserve.show', Bookings::get()->last());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bookings  $bookings
     * @return \Illuminate\Http\Response
     */
    public function show(Bookings $reserve)
    {
        return view('reserve.show',compact('reserve'));
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
        //
    }
}
