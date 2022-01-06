@extends('layouts/mainTemplate')

@section('isiKonten')
  @if (session()->has('successMessage'))
    <div class="alert alert-success" role="alert">
      {{ session('successMessage') }}
    </div>
  @endif

  <h2 class="text-center text-success">Seluruh Mahasiswa</h2>
  <a href="/dashboard/mahasiswa/create">Add Mahasiswa</a>
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
            <a href="/dashboard/mahasiswa/{{ $mahasiswa->id }}" class="btn btn-success d-block">Detail</a>
            <a href="/dashboard/mahasiswa/{{ $mahasiswa->id }}/edit" class="btn btn-warning d-block my-2">Edit</a>
            <form action="/dashboard/mahasiswa/{{ $mahasiswa->id }}" method="POST">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger w-100">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
