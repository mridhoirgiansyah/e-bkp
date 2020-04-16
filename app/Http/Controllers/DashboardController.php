<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashkesiswaan()
    {
        return view('kesiswaan/dashboard');
    }
    public function dashpembimbing()
    {
        return view('pembimbing/dashboard');
    }
}

