@extends('layouts/mainTemplate')

@section('isiKonten')
  <h2 class="text-center text-success mb-5">Detail Mahasiswa</h2>
  <hr>

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="d-flex justify-content-between">
          <h5 class="fw-normal">Nama:</h5>
          <h4>{{ $mahasiswa->nama }}</h4>
        </div>
        <div class="d-flex justify-content-between">
          <h5 class="fw-normal">Email:</h5>
          <h4>{{ $mahasiswa->email }}</h4>
        </div>
        <div class="d-flex justify-content-between">
          <h5 class="fw-normal">Jurusan:</h5>
          <h4>{{ $mahasiswa->jurusan }}</h4>
        </div>
        <div class="d-flex justify-content-between">
          <h5 class="fw-normal">Dosen pembimbing:</h5>
          <a href="/pembimbing/{{ $mahasiswa->pembimbing->kode_pembimbing }}">
            <h5>{{ $mahasiswa->pembimbing->nama }}</h5>
          </a>
        </div>
      </div>
      <a href="/mahasiswas">Lihat Seluruh Daftar Mahasiswa</a>
    </div>
  </div>


@endsection
