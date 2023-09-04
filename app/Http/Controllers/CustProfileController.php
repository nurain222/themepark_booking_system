<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CustProfileController extends Controller
{
 /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(User $profile)
    {

        return view('custProfile.edit',compact('profile'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = auth()->user()->id;
        $profile=User::find($id);
        $profile -> name=$request->name;
        $profile-> email=$request->email;
        $profile -> phone_number=$request->phone;
        $profile -> password=Hash::make($request->password);
        $profile -> save();

        return redirect()->route('custProfile.edit', $id)
                            ->with('success','Profile is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $profile)
    {
        //$profile>delete();

        //return redirect()->route('profile.index')->with('success','Account is deleted successfully.');
    }
}
