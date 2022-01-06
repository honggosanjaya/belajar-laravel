@extends('layouts/mainTemplate')

@section('isiKonten')
  <div class="row justify-content-center">
    <div class="col-4">
      <div class="mb-3">

        <form action="/register" method="POST">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
              placeholder="Nama Lengkap">
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
              placeholder="name@example.com">
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
              name="password">
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <button class="w-100 btn btn-primary" type="submit">Register</button>
        </form>
        <a href="/login">Sudah punya akun?</a>
      </div>
    </div>
  </div>
@endsection
