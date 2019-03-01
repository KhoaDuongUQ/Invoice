<nav class="navbar is-light" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{ route('home') }}">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>
  </div>

  <div class="navbar-menu">
    <div class="navbar-start">
    </div>
    <div class="navbar-end">
      @if (Auth::guest())
        <div class="navbar-item">
          <div class="buttons">
            <a href="{{ route('register') }}" class="button is-small">
							<span class="icon">
								<i class="fa fa-user-plus"></i>
							</span>
							<span>Register</span>
						</a>
            <a href="{{ route('login') }}" class="button is-small is-info is-outlined">
							<span class="icon">
								<i class="fa fa-user"></i>
							</span>
							<span>Login</span>
						</a>
          </div>
        </div>
      @else
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link"> {{ Auth::user()->name }} </a>

          <div class="navbar-dropdown is-right">
            <a class="navbar-item" href="#">
              <span>
                <i class="fas fa-fw fa-user-circle m-r-5"></i>
              </span> Profile
            </a>
            <a class="navbar-item" href="{{ route('dashboard.index') }}">
              <span>
                <i class="fas fa-fw fa-bell m-r-5"></i>
              </span> Dashboard
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
              <span>
                <i class="fas fa-fw fa-sign-out-alt m-r-5"></i>
              </span> Logout
            </a>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </div>
        </div>
      @endif
  </div>
</nav>