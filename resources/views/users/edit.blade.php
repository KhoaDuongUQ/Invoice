@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="columns">
      <div class="column is-one-third is-offset-one-third">

        <user-edit-form
          edit-route="{{ route('users.update', [$user]) }}"
          csrf-token="{{ csrf_token() }}"
          previous-url="{{ url()->previous() }}"
          image-url="{{ $user->image->url }}"
          user-props='{!! $user->toJson() !!}'
          errors-props='{!! $errors->toJson() !!}'>
        </user-edit-form>

      </div>
    </div>
  </div>
@endsection