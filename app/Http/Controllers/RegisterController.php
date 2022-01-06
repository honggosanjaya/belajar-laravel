<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\SUpport\Facades\Hash;

class RegisterController extends Controller
{
  public function index()
  {
    return view('pages.auth.register');
  }

  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'name' => 'required|min:3|max:100',
      'email' => 'required|min:5|max:100|email|unique:users',
      'password' => 'required|min:8|max:30'
    ]);

    $validatedData['password'] = Hash::make($validatedData['password']);

    User::create($validatedData);
    return redirect('/login')->with('successMessage', 'Berhasil mendaftakan user baru');
  }
}
