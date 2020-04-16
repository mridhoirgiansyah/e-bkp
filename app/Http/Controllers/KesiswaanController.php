<?php

namespace App\Http\Controllers;

use App\Reward;
use App\Punishment;
use App\Siswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KesiswaanController extends Controller
{
    public function reward()
    {
        $siswa = Siswa::all();
        $reward = Reward::all();
        return view('kesiswaan.reward', compact('reward','siswa'));
    }




    public function punishment()
    {
        $punishment= \App\Punishment::all();
        return view('kesiswaan.punishment', compact('punishment'));
    }
// Ini tambah reward
    public function store(Request $request)
    {
        $nis = \App\Reward::all();

    	$this->validate($request,[
            'nis' => 'required',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'reward' => 'required',
            'point' => 'required',
            'tanggal' => 'required',
            'saksi' => 'required'
        ]);

        Reward::create([
            'nis' => $request->nis,
            'user_id' => '0',
            'nama' => $request->nama,
            'rombel' => $request->rombel,
            'rayon' => $request->rayon,
            'reward' => $request->reward,
            'point' => $request->point,
            'tanggal' => $request->tanggal,
            'saksi' => $request->saksi
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
            'punishment' => 'required',
            'point' => 'required',
            'tanggal' => 'required',
            'saksi' => 'required'
    	]);
        Punishment::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'rombel' => $request->rombel,
            'rayon' => $request->rayon,
            'punishment' => $request->punishment,
            'point' => $request->point,
            'tanggal' => $request->tanggal,
            'saksi' => $request->saksi
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
    return back()->with('delete', 'Data Berhasil di Hapus!');
}

public function user()
{
    return view('kesiswaan.user');
}

}
