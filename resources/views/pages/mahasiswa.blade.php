@extends('layouts/mainTemplate')

@section('isiKonten')
  <h2 class="text-center text-success mb-5">Detail Mahasiswa</h2>

  <h4 class="fw-normal">Nama: {{ $mahasiswa->nama }}</h4>
  <h4 class="fw-normal">Email: {{ $mahasiswa->email }}</h4>
  <h4 class="fw-normal">Jurusan: {{ $mahasiswa->jurusan }}</h4>
  <h4 class="fw-normal">Hobi:</h4>
  <h4 class="fw-normal">Dosen pembimbing:{{ $mahasiswa->pembimbing->nama }}</h4>

  <a href="/mahasiswas">Lihat Seluruh Daftar Mahasiswa</a>
@endsection
