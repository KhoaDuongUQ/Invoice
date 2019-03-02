@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="columns">
      <div class="column is-one-third is-offset-one-third">

        <store-edit-form
          edit-route="{{ route('users.stores.update', [$user, $store]) }}"
          csrf-token="{{ csrf_token() }}"
          previous-url="{{ url()->previous() }}"
          image-url="{{ $store->image->url }}"
          store-props='{!! $store->toJson() !!}'
          errors-props='{!! $errors->toJson() !!}'>
        </store-edit-form>

      </div>
    </div>
  </div>
@endsection