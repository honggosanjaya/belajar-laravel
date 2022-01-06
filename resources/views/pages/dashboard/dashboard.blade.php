@extends('layouts/mainTemplate')

@section('isiKonten')
  <h2>Selamat datang, {{ auth()->user()->name }}</h2>
@endsection
