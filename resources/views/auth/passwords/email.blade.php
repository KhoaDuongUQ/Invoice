@extends('layouts.app')

@section('content')
  <div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-50">
      <div class="card">
        <div class="card-content">

          <h1 class="title"> Forgot Password </h1>

          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif

          <form class="" action="{{ route('password.email') }}" method="post" role="form">
            {{ csrf_field() }}
            <div class="field">
              <label for="email" class="label"> Email Address </label>
              <p class="control has-icons-left">
                <input class="input {{ $errors->has('email')? 'is-danger' : '' }}" type="email" name='email' id='email' placeholder="Email" value="{{ old('email') }}">
                <span class="icon is-small is-left">
                  <i class="fas fa-envelope"></i>
                </span>
              </p>
              @if ($errors->has('email'))
                <p class="help is-danger"> {{ $errors->first('email') }}</p>
              @endif
            </div>

            <button class="button is-primary is-outlined is-fullwidth m-t-30"> Get Reset Link </button>
            <a class="button is-info is-small is-outlined m-t-10" href="{{ route('login') }}"> <i class="fas fa-caret-left m-r-5"></i> Back to Login </a>
          </form>


        </div>
      </div>
    </div>
  </div>
@endsection
