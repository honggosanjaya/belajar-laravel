@extends('layouts/mainTemplate')

@section('isiKonten')
  <div class="row justify-content-center">
    <div class="col-4">
      <div class="mb-3">

        <form action="">
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>

          <button class="w-100 btn btn-primary" type="submit">Login</button>
        </form>
        <a href="/register">Belum punya akun?</a>
      </div>
    </div>
  </div>
@endsection
