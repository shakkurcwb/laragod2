@extends('shared.theme')

@section('styles')

    <link rel="stylesheet" href="{{ asset('css/separate/pages/login.min.css') }}">

@endsection

@section('content')

<div class="container-fluid">

    <section>

        @form(['method' => 'post', 'url' => '/password/reset', 'class' => 'sign-box'])

            <input type="hidden" name="token" value="{{ $token }}">

            <header class="sign-title">@lang('Reset Password')</header>

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

                @icon(['icon' => 'asterisk', 'has_error' => $errors->has('password')]) @endicon

            @endformGroup

            @formGroup(['left' => true])

                @input([
                    'name' => 'password_confirmation',
                    'title' => __('Confirm Password'),
                    'type' => 'password',
                ]) @endinput

                @icon(['icon' => 'asterisk']) @endicon

            @endformGroup

            <button type="submit" class="btn btn-rounded btn-primary">@lang('Save')</button>

        @endform

    </section>

</div>

@endsection