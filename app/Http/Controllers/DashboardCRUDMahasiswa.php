<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Pembimbing;
use App\Models\Fakultas;

class DashboardCRUDMahasiswa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.dashboard.mahasiswa',[
          'mahasiswas' => Mahasiswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('pages/dashboard/addMahasiswa',[
        'pembimbings' => Pembimbing::all(),
        'fakultases' => Fakultas::all()
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
          'pembimbing_id' => 'required',
          'fakultas_id' => 'required',
          'nim' => 'required|unique:mahasiswas',
          'nama' => 'required',
          'email' => 'required|unique:mahasiswas',
        ]);

        Mahasiswa::create($validatedData);
        return redirect('/dashboard/mahasiswa') -> with('successMessage', 'Berhasil menambhakna mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
      return view('pages.dashboard.detailMahasiswa',[
        'mahasiswa' => $mahasiswa
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
      return view('pages/dashboard/editMahasiswa',[
        'mahasiswa' => $mahasiswa,
        'pembimbings' => Pembimbing::all(),
        'fakultases' => Fakultas::all()
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validatedData = $request->validate([
        'pembimbing_id' => 'required',
        'fakultas_id' => 'required',
        'nim' => 'required|unique:mahasiswas',
        'nama' => 'required',
        'email' => 'required|unique:mahasiswas',
      ]);

      Mahasiswa::where('id', $id)
            ->update($validatedData);

      return redirect('/dashboard/mahasiswa') -> with('successMessage', 'Berhasil mengubah data mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Mahasiswa::destroy('id', $id);

      return redirect('/dashboard/mahasiswa') -> with('successMessage', 'Berhasil mengubah data mahasiswa');
    }
}
