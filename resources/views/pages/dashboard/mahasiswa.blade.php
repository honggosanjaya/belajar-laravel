@extends('layouts/mainTemplate')

@section('isiKonten')
  <h2 class="text-center text-success">Seluruh Mahasiswa</h2>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($mahasiswas as $mahasiswa)
        <tr>
          <td>{{ $mahasiswa->nim }}</td>
          <td>{{ $mahasiswa->nama }}</td>
          <td>{{ $mahasiswa->email }}</td>
          <td>
            {{-- jika mau pencarian berdasarkan nim --}}
            {{-- <a href="/dashboard/mahasiswa/{{ $mahasiswa->nim }}">Detail</a> --}}
            <a href="/dashboard/mahasiswa/{{ $mahasiswa->id }}">Detail</a>
            <a href="">Edit</a>
            <a href="">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
