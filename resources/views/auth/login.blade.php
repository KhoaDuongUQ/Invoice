@extends('layouts.app')

@section('content')
  <auth-login
    csrf-token = '{{ csrf_token() }}'
    :errors='{{ $errors }}'>
  </auth-login>
@endsection
