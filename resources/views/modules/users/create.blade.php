@extends('shared.theme')

@section('header')

    <div class="container-fluid">

        @header([
            'name' => __('Create User'),
            'with_action' => 1,
            'url' => '/users',
        ])

    </div>

@endsection

@section('content')

    <div class="container-fluid">

        <section class="box-typical box-typical-padding">

            @form(['method' => 'post', 'url' => '/users'])

                <div class="row">

                    <label class="col-sm-2 form-control-label">@lang('Name')</label>
                    <div class="col-sm-4">

                        @formGroup([
                            'error' => $errors->has('name') ? $errors->first('name') : ''
                        ])

                            @input([
                                'name' => 'name',
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
                                'has_error' => $errors->has('email'),
                            ])

                            @icon(['icon' => 'envelope', 'has_error' => $errors->has('email')])

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

                        @formGroup(['clean' => true])

                            @checkbox(['name' => 'is_admin', 'title' => 'Is Admin'])
        
                        @endformGroup

                    </div>

                </div>

                <div class="m-t">
                        
                    <button type="submit" class="btn btn-info">@lang('Save')</button>

                </div>

            @endform

        </section>

    </div>

@endsection