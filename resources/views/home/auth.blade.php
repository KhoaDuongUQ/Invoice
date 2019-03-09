@extends('layouts.app')
@section('content')
  @auth
    <div class="has-background-light">
      <div class="container is-fluid">
        <div class="columns">
          <div class="column is-3">
            <dashboard-sidebar
              :stores-count={{ $stores_count }}
              stores-props='{!! $stores->toJson() !!}'
              user-props='{!! auth()->user()->toJson() !!}'
              create-store-route='{{ route('users.stores.create', [auth()->user()]) }}'>
            </dashboard-sidebar>
          </div>
        </div>
      </div>
    </div>
  @endauth
@endsection
