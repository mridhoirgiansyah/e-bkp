<?php

namespace App\Http\Controllers;

use App\Reward;
use App\Punishment;
use Illuminate\Http\Request;

class PembimbingController extends Controller
{
    public function reward()
    {
        $reward = \App\Reward::all();
        return view('pembimbing.reward', compact('reward'));
    }

    public function punishment()
    {
        $punishment= \App\Punishment::all();
        return view('pembimbing.punishment', compact('punishment'));
    }
// Ini tambah reward
    public function store(Request $request)
    {

    	$this->validate($request,[
            'nis' => 'required',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
    		'reward' => 'required'
    	]);
        Reward::create([
            'nis' => $request->nis,
            'user_id' => '0',
            'nama' => $request->nama,
            'rombel' => $request->rombel,
            'rayon' => $request->rayon,
            'reward' => $request->reward
        ]);

        return back()->with('success', 'Data Berhasil di Input!');
    }
//ini tambah punishment
    public function tambah(Request $request)
    {
    	$this->validate($request,[
            'nis' => 'required',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
    		'punishment' => 'required'
    	]);
        Punishment::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'rombel' => $request->rombel,
            'rayon' => $request->rayon,
            'punishment' => $request->punishment
        ]);

        return back()->with('success', 'Data Berhasil di Input!');
    }
//ini hapus reward
    public function destroy($id)
{
    $kesiswaan = Reward::find($id);
    $kesiswaan->delete();
    return back()->with('delete', 'Data Berhasil di Hapus!');
}
//ini hapus punishment
public function hapus($id)
{
    $kesiswaan = Punishment::find($id);
    $kesiswaan->delete();
    return redirect()->back();
}

}
