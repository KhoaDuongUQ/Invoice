@extends('layouts.app')
@section('content')
  <stores-index
    flash-message='{{ session('status') }}'
    csrf-token='{{ csrf_token() }}'
    :user='{{ auth()->user() }}'
    :stores='{{ $stores->toJson() }}'>
  </stores-index>
@endsection
