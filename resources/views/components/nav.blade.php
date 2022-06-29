<nav class="navbar navbar-dark" style="background-color: #4c5b3c">
    <div class="container">
      <a class="navbar-brand" href="#">
      </a>
      @auth   
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
            </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                    <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn dropdown-item">Logout</button>
                    </form>
                    </li>
                </ul>
      </ul>
      @endauth
    </div>
  </nav>

  