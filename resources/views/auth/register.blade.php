@extends('auth.layouts.app')
@section('title')
{{ trans('main.auth.register') }}
@endsection
@section('content')
<div class="container-fluid px-0">
    <div class="row no-gutters min-vh-100"> 
        <div class="col-md-5">
            <div class="hero-wrap d-flex align-items-center h-100">
            <div class="hero-mask opacity-3 bg-primary"></div>
                <div class="hero-content mx-auto w-100 h-100">
                    <div class="container d-flex flex-column h-100">
                        <div class="row no-gutters">
                            <div class="col-11 col-lg-9 mx-auto">
                                <div class="logo mt-5 mb-5 mb-md-0"> <a class="d-flex" href="l" title="Oxyy"><i class="fas fa-hamburger"></i></a> </div>
                            </div>
                        </div>
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
                        <p class="text-right text-2 mb-0">{{ trans('main.auth.already_have_account') }}?<a class="btn-link" href="{{ route('auth.showLoginForm') }}">{{ trans('main.auth.login') }}</a></p>
                    </div>
                </div>
            </div>
            <div class="container my-auto py-5">
                <div class="row">
                    <div class="col-11 col-md-10 col-lg-9 col-xl-8 mx-auto">
                    <h3 class="font-weight-600 mb-4">{{ trans('main.auth.register') }}</h3>
                    <div class="form-row mb-3">
                        <div class="col-4 col-sm-4 col-lg-6">
                            <a href="" class="btn btn-google btn-sm btn-block font-weight-400 shadow-none"><span class="mr-2"><i class="fab fa-google"></i></span><span class="d-none d-lg-inline">{{ trans('main.continue_with_google') }}</span></a>
                        </div>
                        <div class="col-4 col-sm-4 col-lg-6">
                            <a href="" class="btn btn-facebook btn-sm btn-block font-weight-400 shadow-none"><span class="mr-2"><i class="fab fa-facebook-f"></i></span><span class="d-none d-lg-inline">{{ trans('main.continue_with_facebook') }}</span></a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center my-4">
                        <hr class="flex-grow-1">
                        <span class="mx-3 text-2 text-muted"></span>
                        <hr class="flex-grow-1">
                    </div>
                    <form acction="{{ route('auth.register') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group font-weight-500">
                                    <label for="">{{ trans('main.fullname') }}</label>
                                    <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" autofocus>
                                    @error('fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group font-weight-500">
                                    <label for="">{{ trans('main.phone') }}</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">{{ trans('main.email') }}</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">{{ trans('main.auth.username') }}</label>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username">
                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
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
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">{{ trans('main.auth.confirm_password') }}</label>
                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">{{ trans('main.address') }}</label>
                                    <textarea name="address" id="" cols="30" rows="6" class="form-control" name="address"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary shadow-none my-2" type="submit">{{ trans('main.auth.register') }}</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
