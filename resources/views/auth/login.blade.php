@extends('auth.layouts.app')
@section('title')
{{ trans('main.auth.login') }}
@endsection
@section('content')
<div class="container-fluid px-0">
    <div class="row no-gutters min-vh-100"> 
        <div class="col-md-5">
            <div class="hero-wrap d-flex align-items-center h-100">
                <div class="hero-mask opacity-3 bg-primary"></div>
                <div class="hero-content mx-auto w-100 h-100">
                    <div class="container d-flex flex-column h-100">
                        <div class="row no-gutters my-auto">
                            <div class="col-11 col-lg-9 mx-auto">
                                <p class="text-4 line-height-4">{{ trans('main.callout.hundred_foods_are_waiting_for_you') }}</p>
                                <h1 class="text-9 font-weight-600 mb-5">{{ trans('main.callout.come_to_our_store') }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7 d-flex flex-column align-items-center">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-11 col-md-11 mx-auto">
                        <p class="text-right text-2 mb-0">{{ trans('main.auth.you_dont_have_account') }}? <a class="btn-link" href="{{ route('auth.showRegisterForm') }}">{{ trans('main.auth.register') }}</a></p>
                    </div>
                </div>
            </div>
            <div class="container my-auto py-5">
                <div class="row">
                    <div class="col-11 col-md-10 col-lg-9 col-xl-8 mx-auto">
                        <h3 class="font-weight-600 mb-4">{{ trans('main.auth.login') }}</h3>
                        <div class="form-row mb-3">
                            <div class="col-4 col-sm-4 col-lg-6">
                                <a href="" class="btn btn-google btn-sm btn-block font-weight-400 shadow-none"><span class="mr-2"><i class="fab fa-google"></i></span><span class="d-none d-lg-inline">{{ trans('main.login_with_google') }}</span></a>
                            </div>
                            <div class="col-4 col-sm-4 col-lg-6">
                                <a href="" class="btn btn-facebook btn-sm btn-block font-weight-400 shadow-none"><span class="mr-2"><i class="fab fa-facebook-f"></i></span><span class="d-none d-lg-inline">{{ trans('main.login_with_facebook') }}</span></a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-4">
                        <hr class="flex-grow-1">
                        <span class="mx-3 text-2 text-muted"></span>
                        <hr class="flex-grow-1">
                        </div>
                        <form acction="{{ route('auth.login') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="">{{ trans('main.username') }}</label>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" name="username">
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="">{{ trans('main.auth.password') }}</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8 mb-3">
                                    @if (session('login-failed'))
                                        <span class="text-danger" role="alert">{{ session('login-failed') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                               <div class="col-8">
                                    <div class="form-group">
                                        <div class="form-check text- custom-control custom-checkbox">
                                            <input name="remember" class="custom-control-input" id="remember" type="checkbox" value="1">
                                            <label class="custom-control-label" for="remember">{{ trans('main.auth.remember_me') }}</label>
                                        </div>
                                    </div>
                               </div>
                            </div>
                            <button class="btn btn-primary shadow-none my-2" type="submit">{{ trans('main.auth.login') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
