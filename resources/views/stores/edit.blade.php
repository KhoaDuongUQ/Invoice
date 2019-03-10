@extends('layouts.app')
@section('content')
  <stores-edit
    :store="{{ $store }}"
    :user="{{ auth()->user() }}"
    csrf-token="{{ csrf_token() }}"
    :errors="{{ $errors }}">
  </stores-edit>
@endsection