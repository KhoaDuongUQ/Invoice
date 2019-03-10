@extends('layouts.app')

@section('content')
  <users-edit
    csrf-token="{{ csrf_token() }}"
    :user="{{ $user }}"
    :errors="{{ $errors }}">
  </users-edit>
@endsection