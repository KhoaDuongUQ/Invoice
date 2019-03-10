@extends('layouts.app')
@section('content')
  <stores-create
    csrf-token='{{ csrf_token() }}'
    :user='{{ auth()->user() }}'
    :errors='{{ $errors }}'>
  </stores-create>
@endsection