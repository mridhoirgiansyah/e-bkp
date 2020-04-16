<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PunishmentController extends Controller
{
    function index()
    {
        $datapunishment = DB::table('datapunishment')
            ->groupBy('punishment')
            ->get();
        return view('kesiswaan/punishment')->with('datapunishment', $datapunishment);
    }
}
