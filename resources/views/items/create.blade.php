@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="columns">
      <div class="column is-one-third is-offset-one-third">
        <div class="card">
          <div class="card-content">

            <item-create-form
              create-route="{{ route('stores.items.store', $store) }}"
              csrf-token="{{ csrf_token() }}"
              previous-url="{{ url()->previous() }}"
              errors-props='{!! $errors->toJson() !!}'>
            </item-create-form>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection