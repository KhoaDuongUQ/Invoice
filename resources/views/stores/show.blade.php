@extends('layouts.app')

@section('content')
  <stores-show
    flash-message="{{ session('status') }}"
    csrf-token="{{  csrf_token() }}"
    :user="{{ auth()->user() }}"
    :store="{{ $store }}"
    :items="{{ $items->toJson() }}">
  </stores-show>
@endsection
