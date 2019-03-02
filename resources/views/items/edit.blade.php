@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="columns">
      <div class="column is-one-third is-offset-one-third">

        <item-edit-form
          edit-route="{{ route('stores.items.update', [$store, $item]) }}"
          csrf-token="{{ csrf_token() }}"
          previous-url="{{ url()->previous() }}"
          image-url="{{ $item->image->url }}"
          item-props='{!! $item->toJson() !!}'
          errors-props='{!! $errors->toJson() !!}'>
        </item-edit-form>

      </div>
    </div>
  </div>
@endsection