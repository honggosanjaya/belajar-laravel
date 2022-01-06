<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
      return view('pages.auth.login');
    }

    // dokumentasi: authentication
    public function authenticate(Request $request)
    {
      $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8|max:30'
      ]);
  
     if(Auth::attempt($credentials))
     {
       $request->session()->regenerate(); //utk menghindari session fixation (hacking)
       return redirect()->intended('/dashboard'); //intended utk melakukan redirect dengan melewati middleware
     }
  
      return back()->with('errorMessage', 'email/password anda salah');
    }


    // dokumentasi: authentication search logout
    public function logout(Request $request)
    {
      Auth::logout();
      $request->session()->invalidate(); //invalidate session agar session tesbt tidka bisa dipakai lagi
      $request->session()->regenerateToken(); //bikin token baru agar tidak dibajak
      return redirect('/');
    }
}
