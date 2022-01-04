<?php

namespace App\Http\Controllers;

use App\Models\Pembimbing;
use Illuminate\Http\Request;

class PembimbingController extends Controller
{
    public function getOnePembimbing(Pembimbing $pembimbing)
    {
      return view('pages.pembimbing',[
        'pembimbing' => $pembimbing,
        'mahasiswas' => $pembimbing->mahasiswa,
      ]);
    }
}
