@extends('layouts/mainTemplate')

@section('isiKonten')
  <h2 class="text-center text-success mb-5">Detail Pembimbing</h2>

  <h4 class="fw-normal">Nama: {{ $pembimbing->nama }}</h4>
  <h4 class="fw-normal">Kode: {{ $pembimbing->kode_pembimbing }}</h4>
  <h4 class="fw-normal">Murid bimbingan:</h4>

  <ul>
    @foreach ($mahasiswas as $mahasiswa)
      <li><a href="/mahasiswas/{{ $mahasiswa->nim }}">{{ $mahasiswa->nim }}</a></li>
    @endforeach
  </ul>
@endsection
