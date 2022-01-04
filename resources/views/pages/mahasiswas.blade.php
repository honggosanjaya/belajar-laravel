@extends('layouts/mainTemplate')

@section('isiKonten')
  <h2 class="text-center text-success">Seluruh Mahasiswa</h2>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Jurusan</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($mahasiswas as $mahasiswa)
        <tr>
          <td>{{ $mahasiswa->id }}</td>
          <td>{{ $mahasiswa->nama }}</td>
          <td>{{ $mahasiswa->email }}</td>
          <td>{{ $mahasiswa->jurusan }}</td>
          <td><a href="/mahasiswas/{{ $mahasiswa->id }}">Detail</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
