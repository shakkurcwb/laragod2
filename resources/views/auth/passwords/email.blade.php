@extends('shared.theme')

@section('styles')

    <link rel="stylesheet" href="{{ asset('css/separate/pages/login.min.css') }}">

@endsection

@section('content')

    <div class="container-fluid">

        <section>

            @form(['method' => 'post', 'url' => '/password/email', 'class' => 'sign-box'])

                <header class="sign-title">@lang('Recover Password')</header>

                @if (session('status'))

                    @alert([ 'type' => 'success' ]) {{ session('status') }} @endalert

                @endif

                @formGroup([
                    'left' => 1,
                    'error' => $errors->has('email') ? $errors->first('email') : '',
                ])

                    @input([
                        'name' => 'email',
                        'title' => __('Email'),
                        'has_error' => $errors->has('email'),
                    ])

                    @icon(['icon' => 'font', 'has_error' => $errors->has('email')])

                @endformGroup

                <button type="submit" class="btn btn-rounded btn-primary">@lang('Send Link')</button>

                <p class="sign-note">
                    <small>@lang('Remembered your password?') <a href="{{ url('/login') }}">@lang("Sign in here!")</a></small>
                </p>

            @endform

        </section>

    </div>

@endsection