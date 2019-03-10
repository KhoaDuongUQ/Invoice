@extends('layouts.app')
@section('content')
<items-edit
  csrf-token="{{ csrf_token() }}"
  :store="{{ $store }}"
  :item="{{ $item }}"
  :errors="{{ $errors }}">
</items-edit>
@endsection