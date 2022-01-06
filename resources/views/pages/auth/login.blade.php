@extends('layouts/mainTemplate')

@section('isiKonten')
  <div class="row justify-content-center">
    <div class="col-4">
      @if (session()->has('successMessage'))
        <div class="alert alert-success" role="alert">
          {{ session('successMessage') }}
        </div>
      @endif

      @if (session()->has('errorMessage'))
        <div class="alert alert-danger" role="alert">
          {{ session('errorMessage') }}
        </div>
      @endif

      <form action="/login" method="POST">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
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

        <button class="w-100 btn btn-primary" type="submit">Login</button>
      </form>
      <a href="/register">Belum punya akun?</a>
    </div>
  </div>
@endsection
