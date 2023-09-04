<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::whereRoleIs('customer')->get();
        
        return view('customers.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        //giving the role of a 'customer' to the user
        $user->attachRole('customer');
        
        return redirect()->route('customers.create')
                        ->with('success','Customer is added successfully.');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(User $customer)
    {
        
        return view('customers.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(User $customer)
    {
        return view('customers.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer=User::find($id);
        $customer -> name=$request->name;
        $customer -> email=$request->email;
        $customer -> phone_number=$request->phone;
        $customer -> password=Hash::make($request->password);
        $customer -> save();

        return redirect()->route('customers.edit', $id)
                            ->with('success','Customer is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $customer)
    {
        $customer->delete();

        return redirect()->route('customers.index')
                        ->with('success','Customer is deleted successfully.');
    }
}
