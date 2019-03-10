@extends('layouts.app')

@section('content')

  <auth-register
    csrf-token="{{ csrf_token() }}"
    :errors='{{ $errors }}'>
  </auth-register>

@endsection
