@extends('layouts.app')

@section('content')
  <div class="columns is-centered">
    <div class="column is-half">
      <flash-message message="{{ session('status') }}"></flash-message>
    </div>
  </div>

  <div class="columns is-centered">
    <div class="column is-4">
      <change-password-form
        update-password-route='{{ route('updatepassword') }}'
        csrf-token='{{ csrf_token() }}'
        previous-url='{{ url()->previous() }}'
        errors-props='{!! $errors->toJson() !!}'></change-password-form>
    </div>
  </div>
@endsection