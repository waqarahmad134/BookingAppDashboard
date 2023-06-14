<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function users()
    {
        return view('users');
    }
    public function partners()
    {
        return view('partners');
    }
    public function drivers()
    {
        return view('drivers');
    }
    public function vehicles()
    {
        return view('vehicles');
    }
    public function bookings()
    {
        return view('bookings');
    }
    public function extras()
    {
        return view('extras');
    }
}
