@extends('layouts.app')

@section('content')
  <users-show
    flash-message="{{ session('status') }}"
    :user="{{ $user }}">
  </users-show>
@endsection