<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function getAllMahasiswas()
    {
      return view('pages.mahasiswas', [
        'mahasiswas' => Mahasiswa::all()
      ]);
    }

    public function getOneMahasiswa(Mahasiswa $mahasiswa)
    {
      return view('pages.mahasiswa',[
        'mahasiswa' => $mahasiswa
      ]);
    }
}
