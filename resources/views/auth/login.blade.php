@extends('layouts.app')

@section('content')

<div class="login-fb">
    <div class="info">
      <div class="image">
        <img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg">
      </div>
      <div class="container">
        <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
                <form class="mt-3" method="POST" action="{{ route('login') }}">@csrf
                  <input class="email" type="email" name="email" placeholder="Email or phone number" required>
                  <p class="text"></p>
                  <input class="password" type="password" name="password" placeholder="Password" required>
                  <input class="subm" type="submit" value="Log in">
                  <a href="" class="forgot">forgotten password?</a>
                  <div class="new text-center">
                        <!-- Button trigger modal -->
                        <a class="m-0" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <p>create new account</p>
                        </a>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Sign Up</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="mt-3" method="POST" action="{{ route('register') }}">@csrf
        <div class="modal-body py-0">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <input class="name py-2" type="text" name="firstname" placeholder="First name" required>
                    </div>
                    <div class="col-12 col-lg-6">
                        <input class="lastname py-2" type="text" name="lastname" placeholder="Last name" required>
                    </div>
                    <div class="col-12">
                        <input class="email py-2" type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="col-12">
                        <input class="pasword py-2" type="password" name="password" placeholder="New password" required>
                    </div>
                    <div class="col-12">
                        <input class="pasword py-2" type="password" name="password_confirmation" placeholder="Confirm password" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="submit" class="btn text-white px-5" style="background-color: #42b72a;">Sign Up</button>
            </div>
        </form>
    </div>
    </div>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection
