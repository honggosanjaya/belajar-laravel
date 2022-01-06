@extends('layouts/mainTemplate')

@section('isiKonten')
  <form action="/dashboard/mahasiswa" method="POST">
    @csrf
    <div class="mb-3">
      <label for="nim" class="form-label">NIM</label>
      <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim"
        value="{{ old('nim') }}">
      @error('nim')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
        value="{{ old('nama') }}">
      @error('nama')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
        value="{{ old('email') }}">
      @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    {{-- misal pembimbing ini mau pakai input nama pembimbing gimana? --}}
    <div class="mb-3">
      <label for="pembimbing" class="form-label">Pembimbing</label>
      <select class="form-select" name="pembimbing_id">
        @foreach ($pembimbings as $pembimbing)
          <option value="{{ $pembimbing->id }}">{{ $pembimbing->nama }}</option>
        @endforeach
      </select>
    </div>

    <div class="mb-3">
      <label for="fakultas" class="form-label">Fakultas</label>
      <select class="form-select" name="fakultas_id">
        @foreach ($fakultases as $fakultas)
          <option value="{{ $fakultas->id }}">{{ $fakultas->nama }}</option>
        @endforeach
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Add Mahasiswa</button>
  </form>
@endsection
