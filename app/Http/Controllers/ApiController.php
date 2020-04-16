<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\DataReward;
use App\DataPunishment;

use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function getUnits($id){

        $results = Siswa::where('nis' , $id)
            ->get();

        return response()->json([
            'results' => $results
        ]);

    }

    public function getConvert($id){

        $results = DataReward::where('reward'   , $id)
            ->get();

        return response()->json([
            'results' => $results
        ]);

    }

    public function getPunishment($id){

        $results = DataPunishment::where('punishment'   , $id)
            ->get();

        return response()->json([
            'results' => $results
        ]);

    }

    public function handleConvert($id){

        $results = Siswa::all()
            ->where('id' , $id)
            ->orderBy('id', 'asc')
            ->get();

        return response()->json([
            'results' => $results
        ]);

    }
}
