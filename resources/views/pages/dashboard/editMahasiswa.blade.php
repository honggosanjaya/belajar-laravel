@extends('layouts/mainTemplate')

@section('isiKonten')
  <form action="/dashboard/mahasiswa/{{ $mahasiswa->id }}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="nim" class="form-label">NIM</label>
      <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim"
        value="{{ old('nim', $mahasiswa->nim) }}">
      @error('nim')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
        value="{{ old('nama', $mahasiswa->nama) }}">
      @error('nama')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
        value="{{ old('email', $mahasiswa->email) }}">
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
          @if (old('pembimbing_id', $mahasiswa->pembimbing_id) == $pembimbing->id)
            <option value="{{ $pembimbing->id }}" selected>{{ $pembimbing->nama }}</option>
          @else
            <option value="{{ $pembimbing->id }}">{{ $pembimbing->nama }}</option>
          @endif
        @endforeach
      </select>
    </div>

    <div class="mb-3">
      <label for="fakultas" class="form-label">Fakultas</label>
      <select class="form-select" name="fakultas_id">
        @foreach ($fakultases as $fakultas)
          @if (old('fakultas_id', $mahasiswa->fakultas_id) == $fakultas->id)
            <option value="{{ $fakultas->id }}" selected>{{ $fakultas->nama }}</option>
          @else
            <option value="{{ $fakultas->id }}">{{ $fakultas->nama }}</option>
          @endif
        @endforeach
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Edit Mahasiswa</button>
  </form>
@endsection
