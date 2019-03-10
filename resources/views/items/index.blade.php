@extends('layouts.app')
@section('content')
  <items-index
    flash-message="{{ session('status') }}"
    csrf-token="{{ csrf_token() }}"
    :store="{{ $store }}"
    :items="{{ $items->toJson() }}">
  </items-index>
@endsection

