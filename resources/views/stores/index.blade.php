@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="columns is-centered">
      <div class="column is-half">
        <flash-message message='{{ session('status') }}'></flash-message>
      </div>
    </div>

    <div class="columns">
      <div class="column is-9 content">
        @foreach ($stores as $store)
          <div class="media">
            <div class="media-left">
              <figure class='image is-64x64'><img src='{{ $store->image->url }}'></figure>
            </div>
            <div class="media-content">
              <h4> <a href="{{ route('users.stores.show', [auth()->user(), $store]) }}"> {{ $store->name }} </a></h4>
              <span class="tag is-light"> Created {{ $store->created_at->toFormattedDateString() }} </span>
            </div>
            <div class="media-right buttons is-centered">
              <edit-button
                delete-route="{{ route('users.stores.edit', [$user, $store]) }}">
              </edit-button>
              <delete-button
                object-name="store"
                delete-route="{{ route('users.stores.destroy', [$user, $store]) }}"
                csrf-token="{{ csrf_token() }}">
              </delete-button>
            </div>
          </div>
        @endforeach
        {{ $stores->links() }}
      </div>
      <div class="column is-3">
        <a  href="{{ route('users.stores.create', auth()->user()->id) }}" class="button is-info"> New store </a>
      </div>
    </div>
  </div>
@endsection
