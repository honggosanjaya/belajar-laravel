@extends('layouts/mainTemplate')

@section('isiKonten')
  <h2 class="text-center text-success">Seluruh Pembimbing</h2>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Kode Pembimbing</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pembimbings as $pembimbing)
        <tr>
          <td>{{ $pembimbing->kode_pembimbing }}</td>
          <td>{{ $pembimbing->nama }}</td>
          <td><a href="/pembimbing/{{ $pembimbing->kode_pembimbing }}">Detail</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
