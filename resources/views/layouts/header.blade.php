<header class="sticky-top">
  <nav class="navbar navbar-expand-lg bg-white bg-opacity-75 shadow-lg" id="app-navbar">
    <div class="container-fluid">

      <a class="navbar-brand" href="{{route('main')}}">
        <img src="{{asset('/img/logo.png')}}" alt="UkrInvest" height="48">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto gap-3 fs-5">
          @yield('nav-segments')
        </ul>

        @auth
        <div class="dropdown-center">
          <button type="button" class="btn btn-primary btn-sm mx-3" role="button" data-bs-toggle="dropdown">Admin</button>
          <ul class="dropdown-menu dropdown-menu-lg-end">
            <li><a class="dropdown-item" href="{{route('register')}}">Add new admin</a></li>
            <li><button class="dropdown-item" onclick="document.getElementById('logout-form').submit();">Logout</button></li>
          </ul>
        </div>
        @endauth


        <label class="dropdown cursor-pointer">
          <button type="button" class="btn btn-outline-dark rounded-pill px-3" role="button" data-bs-toggle="dropdown">En</button>
          <span class="icon icon-lang-arrow"></span>
          <ul class="dropdown-menu dropdown-menu-lg-end">
            <li><button class="dropdown-item">Armenian</button></li>
            <li><button class="dropdown-item">English</button></li>
            <li><button class="dropdown-item">Russian</button></li>
          </ul>
        </label>

      </div>
    </div>
  </nav>
</header>

@auth
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
  @csrf
</form>
@endauth
