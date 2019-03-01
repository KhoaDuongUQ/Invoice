@extends('layouts.app')

@section('styles')
  <link href="{{ asset('css/users/dashboard.css') }}" rel="stylesheet">
@endsection

@section('content')
  <div class="container">
    <div class="columns is-centered">
      <div class="column is-10">
        <section class="hero is-info welcome is-small">
          <div class="hero-body">
              <div class="container">
                  <h1 class="title">
                      Hello, {{ $user->name }}.
                  </h1>
                  <h2 class="subtitle">
                      I hope you are having a great day!
                  </h2>
              </div>
          </div>
        </section>
        <section class="info-tiles">
            <div class="tile is-ancestor has-text-centered">
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <p class="title"> {{ $stores_count }} </p>
                        <p class="subtitle">Stores</p>
                    </article>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <p class="title"> {{ $items_count }} </p>
                        <p class="subtitle">Items</p>
                    </article>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <p class="title">3.4k</p>
                        <p class="subtitle">Open Orders</p>
                    </article>
                </div>
            </div>
          </section>
      </div>
    </div>

    <div class="columns">
      <div class="column is-4">
        <div class="card stores-card">
          <header class="card-header">
            <p class="card-header-title">
              Stores
            </p>
          </header>
          <div class="card-content">
            <table class="table is-bordered is-fullwidth">
              <tbody>
                @foreach ($stores as $store)
                  <tr>
                    <td width="5%">
                      <i class="fas fa-store"></i>
                    </td>
                    <td>
                      <a href="{{ route('users.stores.show',[$user,$store]) }}"> {{ $store->name }} </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <footer class="card-footer">
            <a href="{{ route('users.stores.index',$user) }}" class="button is-info card-footer-item">View All</a>
          </footer>
        </div>
      </div>
      <div class="column is-4">

      </div>

      <div class="column is-4">

      </div>

    </div>

  </div>
@endsection