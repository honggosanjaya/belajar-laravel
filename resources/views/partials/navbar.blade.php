<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        @auth
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/mahasiswa*') ? 'active' : '' }}"
              href="/dashboard/mahasiswa">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('pembimbings') ? 'active' : '' }}" href="/pembimbings">Pembimbing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="btn btn-danger">LOGOUT</button>
            </form>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="/login">LOGIN</a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
