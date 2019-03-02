@extends('layouts.app')

@section('content')
  <div class="columns is-centered">
    <div class="column is-half">
      <flash-message message="{{ session('status') }}"></flash-message>
    </div>
  </div>

  <div class="columns is-centered">
    <div class="column is-4">
      <div class="card">

        <div class="card-image">
          <nav class="level">
              <div class="level-item has-text-centered">
                  <figure class='image is-128x128'><img class="is-rounded" src="{{ $user->image->url }}"></figure>
              </div>
          </nav>
        </div>

        <div class="card-content">
          <div class="content">
            <p class="title is-4"> {{$user->name}} </p>
            <p class="subtitle is-6 has-text-grey-light is-italic">Created {{$user->created_at->toFormattedDateString()}} </p>
            <h5>Email</h5>
            <blockquote>{{$user->email}}</blockquote>
          </div>
        </div>

        <footer class="card-footer">
          <div class="card-footer-item buttons is-centered">
            <edit-button
              edit-route="{{ route('users.edit', [$user]) }}">
            </edit-button>
            <change-password-button
              change-password-route="{{ route('changepassword') }}">
            </change-password-button>
          </div>
        </footer>

      </div>
    </div>
  </div>
@endsection