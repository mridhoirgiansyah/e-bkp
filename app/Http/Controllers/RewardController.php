<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class RewardController extends Controller
{
    function index()
    {
        $datareward = DB::table('datareward')
            ->groupBy('reward')
            ->get();
        return view('kesiswaan/reward')->with('datareward', $datareward);
    }
}
