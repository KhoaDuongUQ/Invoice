@extends('layouts.app')

@section('content')
  <items-show
    flash-message="{{ session('status') }}"
    csrf-token="{{ csrf_token() }}"
    :store="{{ $store }}"
    :item="{{ $item }}">
  </items-show>
@endsection