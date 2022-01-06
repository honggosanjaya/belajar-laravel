@extends('layouts/mainTemplate')

@section('isiKonten')
  <h2 class="text-center text-success mb-5">Detail Pembimbing</h2>
  <hr>
  <h5 class="fw-normal">Nama: {{ $pembimbing->nama }}</h5>
  <h5 class="fw-normal">Kode: {{ $pembimbing->kode_pembimbing }}</h5>
  <h5 class="fw-normal">Murid bimbingan:</h5>

  <ul>
    @foreach ($mahasiswas as $mahasiswa)
      <li><a href="/dashboard/mahasiswa/{{ $mahasiswa->id }}" class="text-decoration-none">{{ $mahasiswa->nim }} -
          {{ $mahasiswa->nama }}</a></li>
    @endforeach
  </ul>
@endsection
