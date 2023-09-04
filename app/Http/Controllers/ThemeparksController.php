<?php

namespace App\Http\Controllers;

use App\Models\Themeparks;
use Illuminate\Http\Request;

class ThemeparksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Themeparks::all();
        return view('themeparks.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('themeparks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Themeparks;
        $data -> park_name=$request->name;
        $data -> park_details=$request->details;
        $data -> park_price=$request->price;
        $data -> save();
   
        return redirect()->route('themeparks.create')
                        ->with('success','Themepark is added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Themeparks  $themeparks
     * @return \Illuminate\Http\Response
     */
    public function show(Themeparks $themepark)
    {
        return view('themeparks.show',compact('themepark'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Themeparks  $themeparks
     * @return \Illuminate\Http\Response
     */
    public function edit(Themeparks $themepark)
    {
        return view('themeparks.edit',compact('themepark'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Themeparks  $themeparks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $themepark=Themeparks::find($id);
        $themepark -> park_name=$request->name;
        $themepark-> park_details=$request->details;
        $themepark -> park_price=$request->price;
        $themepark -> save();
        

        return redirect()->route('themeparks.edit', $id)
                            ->with('success','Themepark is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Themeparks  $themeparks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Themeparks $themepark)
    {
        $themepark->delete();

        return redirect()->route('themeparks.index')
                        ->with('success','Themepark is deleted successfully.');
    }
}
