@extends('shared.theme')

@section('styles')

    <link rel="stylesheet" href="{{ asset('css/separate/pages/login.min.css') }}">

@endsection

@section('content')

    <div class="container-fluid">

        <section>

            @form(['method' => 'post', 'url' => '/login', 'class' => 'sign-box'])

                <div class="sign-avatar"> @img(['url' => 'img/logo-2-mob.png']) </div>

                <header class="sign-title">{{ config('app.name', 'LaraGod') }}</header>

                @formGroup([
                    'on_left' => 1,
                    'error' => $errors->has('email') ? $errors->first('email') : ''
                ])

                    @input([
                        'name' => 'email',
                        'title' => __('Email'),
                        'has_error' => $errors->has('email'),
                    ])

                    @icon(['icon' => 'envelope', 'has_error' => $errors->has('email')])

                @endformGroup

                @formGroup([
                    'on_left' => 1,
                    'error' => $errors->has('password') ? $errors->first('password') : '',
                ])

                    @input([
                        'name' => 'password',
                        'title' => __('Password'),
                        'type' => 'password',
                        'has_error' => $errors->has('password'),
                    ])

                    @icon(['icon' => 'asterisk', 'has_error' => $errors->has('password')])

                @endformGroup

                @formGroup(['clean' => true])

                    <div class="float-left reset">
                        @checkbox(['name' => 'remember', 'title' => 'Remember Me'])
                    </div>

                    <div class="float-right reset">
                        <a href="{{ url('/password/reset') }}">@lang('Recover Password')</a>
                    </div>

                @endformGroup

                <button type="submit" class="btn btn-rounded btn-primary">@lang('Sign In')</button>

                @if (Route::has('register'))

                    <p class="sign-note">
                        <small>@lang('Do not have an account?') <a href="{{ url('/register') }}">@lang("Register here!")</a></small>
                    </p>

                @endif

            @endform

        </section>

    </div>

@endsection