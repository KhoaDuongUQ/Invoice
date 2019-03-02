@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="columns">
      <div class="column is-one-third is-offset-one-third">
          <store-create-form
            create-route="{{ route('users.stores.store', auth()->user()) }}"
            csrf-token="{{ csrf_token() }}"
            previous-url="{{ url()->previous() }}"
            errors-props='{!! $errors->toJson() !!}'>
          </store-create-form>
      </div>
    </div>
  </div>
@endsection