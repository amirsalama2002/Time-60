@extends('layouts.app')

@section('content')
<style>
    .mero{
        width: 100%;
        margin: auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }
     .card{
        border: 1px solid #123456;
        width: 28rem;
        margin:10px auto;
    }
    .btn{
        width: 100%;
    }
    input{
        border: 2px solid black !important;
    }
    .ho{
        width: 27rem;
        margin: auto;
    }
    .ho img{
        width: 100%;
        border-radius: 10px;
    }
</style>
<div class="container" style="width:100%; margin-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mero">
            <div class="card">
                <div class="card-header">
                <!-- {{ __('Register') }} -->
                  login Register :
            </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-7 col-form-label">{{ __('Name') }}</label>
                           
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-7 col-form-label ">{{ __('Email Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-7 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-7 col-form-label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12 offset-md-0">
                                <button type="submit" style="width: 100%;" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
              <div class="ho">
                <img src="../image/Screenshot 2024-11-04 185343.png" alt="">
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
