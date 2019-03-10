@extends('layouts.app')
@section('content')
<items-create
  csrf-token="{{ csrf_token() }}"
  :store="{{ $store }}"
  :errors="{{ $errors }}">
</items-create>
@endsection