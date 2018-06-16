<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <div class="navbar-collapse offcanvas-colapse">
    <ul class="navbar-nav mr-auto">
    </ul>
    @guest
    <a class="nav-link text-center text-light" href="/login">
      Login
    </a>
    <a class="nav-link text-center text-light" href="/register">
      Register
    </a>
    @else
    <a class="nav-link text-light">
        Hello, {{ Auth::user()->name }}
    </a>
        <a class="nav-link text-light" href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Logout
        </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
    @endguest
  </div>
</nav>
