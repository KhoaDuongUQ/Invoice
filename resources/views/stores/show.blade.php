@extends('layouts.app')

@section('content')
  <div class="columns is-centered">
    <div class="column is-half">
      <flash-message message="{{ session('status') }}"></flash-message>
    </div>
  </div>

  <div class="columns">

    <div class="column is-3">
      <div class="card">
        <div class="card-image">
          <nav class="level">
            <div class="level-item has-text-centered">
              <figure class='image is-128x128'><img class="is-rounded" src='{{ $store->image->url }}'></figure>
            </div>
          </nav>
        </div>
        <div class="card-content">
          <div class="content">
            <h5>Name</h5>
            <blockquote>{{$store->name}}</blockquote>

            <h5>Address</h5>
            <blockquote>{{$store->address}}</blockquote>

            <h5>Description</h5>
            <blockquote>{{$store->description}}</blockquote>

          </div>
        </div>

        <footer class="card-footer">
          <div class="card-footer-item buttons is-centered">
            <edit-button
              edit-route="{{ route('users.stores.edit', [$user, $store]) }}">
            </edit-button>
            <delete-button
              object-name="store"
              delete-route="{{ route('users.stores.destroy', [$user, $store]) }}"
              csrf-token="{{ csrf_token() }}">
            </delete-button>
          </div>
        </footer>
      </div>
    </div>

    <div class="column is-8">
          <nav class="level">
            <div class="level-left">
              <div class="level-item">
                <p class="subtitle is-5">
                  <strong> {{ $items->count() }} </strong> items
                </p>
              </div>
              <div class="level-item">
                <b-field>
                  <b-input placeholder="Search..."
                      type="search"
                      icon="magnify">
                  </b-input>
                  <p class="control">
                      <button class="button is-primary">Search</button>
                  </p>
                </b-field>
              </div>
            </div>

            <div class="level-right">
              <div class="level-item">
                <a class="button is-primary" href="{{ route('stores.items.create', $store) }}"> New item </a>
              </div>
            </div>
          </nav>

          <div class="card stores-card">
            <header class="card-header">
              <p class="card-header-title">
                Items
              </p>
            </header>
            <div class="card-content">
              <table class="table is-fullwidth is-bordered is-striped">
                <thead>
                  <tr>
                    <th> Image </th>
                    <th> Name </th>
                    <th> Description </th>
                    <th> Price </th>
                    <th> Date Created </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($items as $item)
                    <tr>
                      <td><figure class='image is-48x48'><img src='{{ $item->image->url }}'></figure></td>
                      <td> <a href="{{ route('stores.items.show',[$store,$item]) }}"> {{ $item->name }} </a> </td>
                      <td> {{ $item->description }} </td>
                      <td> {{ $item->price }} </td>
                      <td> {{ $item->created_at->toFormattedDateString() }} </td>
                    </tr>
                  @endforeach
                </tbody>

              </table>
            </div>
            <footer class="card-footer">
              <a href="{{ route('stores.items.index',$store) }}" class="button is-info card-footer-item">View All</a>
            </footer>
          </div>

    </div>
  </div>
@endsection
