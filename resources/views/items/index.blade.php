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
        @foreach ($items as $item)
          <div class="media">
            <div class="media-left">
              <figure class='image is-64x64'><img src='{{ $item->image->url }}'></figure>
            </div>
            <div class="media-content">
              <h4> <a href="{{ route('stores.items.show', [$store, $item]) }}"> {{ $item->name }} </a></h4>
              <span class="tag is-light"> Created {{ $item->created_at->toFormattedDateString() }} </span>
            </div>
            <div class="media-right buttons">
              <edit-button
                delete-route="{{ route('stores.items.edit', [$store, $item]) }}">
              </edit-button>
              <delete-button
                object-name="item"
                delete-route="{{ route('stores.items.destroy', [$store, $item]) }}"
                csrf-token="{{ csrf_token() }}">
              </delete-button>
            </div>
          </div>
        @endforeach
        {{ $items->links() }}
      </div>
      <div class="column is-3">
        <a href="{{ route('stores.items.create', $item) }}" class="button is-info"> New item </a>
      </div>
    </div>
  </div>
@endsection
