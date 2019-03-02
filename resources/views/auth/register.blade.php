@extends('layouts.app')

@section('content')

  <div class="columns">
    <div class="column is-one-third is-offset-one-third">
      <user-create-form
        register-route="{{ route('register') }}"
        login-route="{{ route('login') }}"
        csrf-token="{{ csrf_token() }}"
        errors-props='{!! $errors->toJson() !!}'>
      </user-create-form>
    </div>
  </div>

@endsection
