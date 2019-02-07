@extends('shared.theme')

@section('styles')

    <link rel="stylesheet" href="{{ asset('css/separate/pages/login.min.css') }}">

@endsection

@section('content')

    <div class="container-fluid">

        <section>

            @form(['method' => 'post', 'url' => '/register', 'class' => 'sign-box'])

                <div class="sign-avatar"> @img(['url' => 'img/avatar-sign.png']) </div>

                <header class="sign-title">@lang('New User')</header>

                @formGroup([
                    'left' => 1,
                    'error' => $errors->has('name') ? $errors->first('name') : '',
                ])

                    @input([
                        'name' => 'name',
                        'title' => __('Name'),
                        'has_error' => $errors->has('name'),
                    ])

                    @icon(['icon' => 'font', 'has_error' => $errors->has('name')])

                @endformGroup

                @formGroup([
                    'left' => 1,
                    'error' => $errors->has('email') ? $errors->first('email') : '',
                ])

                    @input([
                        'name' => 'email',
                        'title' => __('Email'),
                        'has_error' => $errors->has('email'),
                    ]) 

                    @icon(['icon' => 'envelope', 'has_error' => $errors->has('email')])

                @endformGroup

                @formGroup([
                    'left' => 1,
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

                @formGroup(['left' => true])

                    @input([
                        'name' => 'password_confirmation',
                        'title' => __('Confirm Password'),
                        'type' => 'password',
                    ]) 

                    @icon(['icon' => 'asterisk'])

                @endformGroup

                <button type="submit" class="btn btn-rounded btn-primary">@lang('Register')</button>

                <p class="sign-note">
                    <small>@lang('Already have an account?') <a href="{{ url('/login') }}">@lang('Sign in here!')</a></small>
                </p>

            @endform

        </section>
        
    </div>

@endsection