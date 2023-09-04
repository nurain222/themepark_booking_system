<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Themeparks;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $user = User::find(Auth::user()->id);

        if($user->hasRole('admin'))
        {
            return view ('dashboard');
        }
        else if($user->hasRole('customer'))
        {
            $data=Themeparks::all();
            return view('reserve.index',compact('data'));
        }
    }
}
