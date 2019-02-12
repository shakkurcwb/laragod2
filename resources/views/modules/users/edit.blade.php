@extends('shared.theme')

@section('header')

    <div class="container-fluid">

        @header([
            'name' => __('Edit User'),
            'with_action' => 1,
            'url' => '/users',
        ])

    </div>

@endsection

@section('content')
    
    <div class="container-fluid">

        @success(['message' => session('success')])

        <section class="box-typical box-typical-padding">

            @form(['method' => 'patch', 'url' => '/users/' . $user->id])

                <div class="row">

                    <label class="col-sm-2 form-control-label">@lang('Name')</label>
                    <div class="col-sm-4">

                        @formGroup([
                            'error' => $errors->has('name') ? $errors->first('name') : ''
                        ])

                            @input([
                                'name' => 'name',
                                'value' => $user->name,
                                'has_error' => $errors->has('name'),
                            ])

                            @icon(['icon' => 'font', 'has_error' => $errors->has('name')])

                        @endformGroup

                    </div>

                    <label class="col-sm-2 form-control-label">@lang('Email')</label>
                    <div class="col-sm-4">

                        @formGroup([
                            'error' => $errors->has('email') ? $errors->first('email') : ''
                        ])

                            @input([
                                'name' => 'email',
                                'value' => $user->email,
                                'has_error' => $errors->has('email'),
                            ])

                            @icon(['icon' => 'envelope', 'has_error' => $errors->has('email')])

                        @endformGroup

                    </div>

                </div>

                <div class="row">

                    <label class="col-sm-2 form-control-label">@lang('Theme')</label>
                    <div class="col-sm-4">

                        @formGroup([
                            'no_icon' => 1,
                            'error' => $errors->has('theme') ? $errors->first('theme') : ''
                        ])

                            @select([
                                'name' => 'theme',
                                'selected' => $user->meta->theme ?? '',
                                'options' => [

                                    '' => 'Original',
                                    'theme-rebecca-purple' => 'Rebecca Purple',
                                    'theme-picton-blue' => 'Picton Blue',

                                    'theme-picton-blue-white-ebony' => 'Side White Ebony',
                                    'theme-side-tin' => 'Side Tin',
                                    'theme-side-ebony-clay' => 'Side Ebony Clay',
                                    'theme-side-madison-caribbean' => 'Side Madison Caribbean',
                                    'theme-side-caesium-dark-caribbean' => 'Side Caesium Dark Caribbean',
                                    'theme-side-litmus-blue' => 'Side Litmus Blue',

                                ],
                            ])

                        @endformGroup

                    </div>

                    <label class="col-sm-2 form-control-label">@lang('Language')</label>
                    <div class="col-sm-4">

                        @formGroup([
                            'no_icon' => 1,
                            'error' => $errors->has('language') ? $errors->first('language') : ''
                        ])

                            @select([
                                'name' => 'language',
                                'selected' => $user->meta->language ?? config('app.locale'),
                                'options' => [
                                    
                                    'pt-BR' => 'Português',
                                    'en' => 'English',
                                    'fr' => 'Français',
                                    'es' => 'Español',

                                ],
                            ])

                        @endformGroup

                    </div>

                </div>

                <div class="row">

                    <label class="col-sm-2 form-control-label">@lang('Password')</label>
                    <div class="col-sm-4">

                        @formGroup([
                            'error' => $errors->has('password') ? $errors->first('password') : ''
                        ])

                            @input([
                                'name' => 'password',
                                'type' => 'password',
                                'has_error' => $errors->has('password'),
                            ])

                            @icon(['icon' => 'key', 'has_error' => $errors->has('password')])

                        @endformGroup

                    </div>

                    <label class="col-sm-2 form-control-label">@lang('Confirm')</label>
                    <div class="col-sm-4">

                        @formGroup

                            @input([
                                'name' => 'password_confirmation',
                                'type' => 'password',
                            ])

                            @icon(['icon' => 'asterisk'])

                        @endformGroup

                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-4">

                        @formGroup(['no_icon' => true])

                            @checkbox([
                                'name' => 'is_admin',
                                'title' => 'Is Admin',
                                'checked' => $user->is_admin ?? false
                            ])
        
                        @endformGroup

                    </div>

                </div>

                <div class="m-t">
                        
                    <button type="submit" class="btn btn-info">@lang('Save')</button>

                    <a class="btn btn-danger" href="{{ url('/users/' . $user->id . '/delete') }}">@lang('Delete')</a>

                </div>

            @endform

        </section>

    </div>

@endsection