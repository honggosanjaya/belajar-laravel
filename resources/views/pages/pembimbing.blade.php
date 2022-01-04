@extends('layouts/mainTemplate')

@section('isiKonten')
  <h2 class="text-center text-success mb-5">Detail Pembimbing</h2>
  <hr>
  <h5 class="fw-normal">Nama: {{ $pembimbing->nama }}</h5>
  <h5 class="fw-normal">Kode: {{ $pembimbing->kode_pembimbing }}</h5>
  <h5 class="fw-normal">Murid bimbingan:</h5>

  <ul>
    @foreach ($mahasiswas as $mahasiswa)
      <li><a href="/mahasiswas/{{ $mahasiswa->nim }}">{{ $mahasiswa->nim }}</a></li>
    @endforeach
  </ul>
@endsection
