@auth
  <navbar-auth
    home-route='{{ route('home')}}'
    stores-route='{{ route('users.stores.index',[auth()->user()]) }}'
    register-route='{{ route('register') }}'
    login-route='{{ route('login') }}'
    logout-route='{{ route('logout') }}'
    dashboard-route='{{ route('dashboard.index') }}'
    profile-route='{{ route('users.show',[auth()->user()]) }}'
    logo-url='https://bulma.io/images/bulma-logo.png'
    user-props='{{ auth()->user()->toJson() }}'
    csrf-token='{{ csrf_token() }}'>
  </navbar-auth>
@endauth

@guest
  <navbar-guest
    home-route='{{ route('home')}}'
    register-route='{{ route('register') }}'
    login-route='{{ route('login') }}'
    logout-route='{{ route('logout') }}'
    logo-url='https://bulma.io/images/bulma-logo.png'
    csrf-token='{{ csrf_token() }}'>
  </navbar-guest>
@endguest