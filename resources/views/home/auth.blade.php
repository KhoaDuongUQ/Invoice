@extends('layouts.app')
@section('content')
  <home-auth
    :user="{{ auth()->user() }}"
    :stores="{{ $stores->toJson() }}">
  </home-auth>
@endsection

