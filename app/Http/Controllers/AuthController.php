<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }

    public function postlogin(Request $request)
    {
        // dd($request->all());
      if(Auth::attempt($request->only('email', 'password'))){
          if(auth()->user()->role == 'pembimbing'){
            return redirect('/pembimbing/dashboard');
          }
          elseif(auth()->user()->role == 'kesiswaan'){
              return redirect('/kesiswaan/dashboard');
          }
          else{
              return redirect('/dashboard');
          }
      }

      return back()->with('gagal', 'Tidak Berhasil Login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
