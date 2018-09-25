@extends('layouts.app')

@section('content')
  <div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-50">
      <div class="card">
        <div class="card-content">

          <h1 class="title"> Reset Your Password </h1>

          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif

          <form class="" action="{{ route('password.request') }}" method="post" role="form">

            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="field">
              <label for="email" class="label"> Email Address </label>
              <p class="control has-icons-left">
                <input class="input {{ $errors->has('email')? 'is-danger' : '' }}" type="email" name='email' placeholder="Email">
                <span class="icon is-small is-left">
                  <i class="fas fa-envelope"></i>
                </span>
              </p>
              @if ($errors->has('email'))
                <p class="help is-danger"> {{ $errors->first('email') }}</p>
              @endif
            </div>

            <div class="field">
              <label for="password" class="label"> Password </label>
              <p class="control has-icons-left">
                <input class="input {{ $errors->has('password')? 'is-danger' : '' }}" type="password" name="password" placeholder="Password">
                <span class="icon is-small is-left">
                  <i class="fas fa-lock"></i>
                </span>
              </p>
              @if ($errors->has('password'))
                <p class="help is-danger"> {{ $errors->first('password') }}</p>
              @endif
            </div>

            <div class="field">
              <label for="password" class="label"> Password Confirmation </label>
              <p class="control has-icons-left">
                <input class="input {{ $errors->has('password_confirmation')? 'is-danger' : '' }}" type="password" name="password_confirmation" placeholder="Password Confirmation">
                <span class="icon is-small is-left">
                  <i class="fas fa-lock"></i>
                </span>
              </p>
              @if ($errors->has('password_confirmation'))
                <p class="help is-danger"> {{ $errors->first('password_confirmation') }}</p>
              @endif
            </div>

            <button class="button is-primary is-outlined is-fullwidth m-t-30"> Reset Password </button>
            <a class="button is-info is-small is-outlined m-t-10" href="{{ route('login') }}"> Already have an account? </a>
          </form>


        </div>
      </div>
    </div>
  </div>
@endsection
