<?php

namespace App\Http\Controllers;
use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function datasiswa()
    {
    	// mengambil data dari table siswa
        $siswa = \App\Siswa::all();
    	// mengirim data siswa ke view data siswa
    	return view('kesiswaan/datasiswa', compact('siswa'));

    }
    //ini tambah datasiswa
public function tambah(Request $request)
{
    $this->validate($request,[
        'nis' => 'required',
        'nama' => 'required',
        'rombel' => 'required',
        'rayon' => 'required'
    ]);
    Siswa::create([
        'nis' => $request->nis,
        'nama' => $request->nama,
        'rombel' => $request->rombel,
        'rayon' => $request->rayon
    ]);

return back()->with('success', 'Data Berhasil di Input!');
}
//ini hapus datasiswa
public function delete($id)
{
    $kesiswaan = Siswa::find($id);
    $kesiswaan->delete();
    return back()->with('delete', 'Data Berhasil di Hapus!');
}

}
