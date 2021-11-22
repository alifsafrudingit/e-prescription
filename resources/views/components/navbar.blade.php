<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link {{ request()->is('welcome') ? 'active' : '' }}" href="{{ route('welcome') }}">E-Prescription</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ request()->is('obat') ? 'active' : '' }}" href="{{ route('obat') }}">Obat</a>
              </li>
          </ul>
          @auth()
          <div class="d-flex user-logged nav-item dropdown no-arrow">
            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Halo, {{Auth::user()->name}}
                @if (Auth::user()->avatar)
                    <img src="{{Auth::user()->avatar}}" class="user-photo rounded-circle shadow-sm" alt="avatar">
                @else    
                    <img src="https://ui-avatars.com/api/?name=Admin" class="user-photo rounded-circle shadow-sm" alt="avatar">
                @endif
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right: 0; left: auto">
                    <li>
                        <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Log Out</a>
                        <form id="logout-form" action="{{route('logout')}}" method="post" style="dislay: none">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </form>
                    </li>
                </ul>
            </a>
        </div>
          @else
            <div class="d-flex">
                <a href="{{ route('login') }}" class="btn btn-master btn-secondary me-3">
                    Log In
                </a>
                <a href="{{ route('register') }}" class="btn btn-master btn-primary">
                    Sign Up
                </a>
            </div>
          @endauth
      </div>
  </div>
</nav>