@extends('layouts.app')

@section('content')
  <auth-password-update
    flash-message="{{ session('status') }}"
    csrf-token='{{ csrf_token() }}'
    :errors='{{ $errors }}'>
  </auth-password-update>
@endsection