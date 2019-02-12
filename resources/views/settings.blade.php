@extends('shared.theme')

@section('header')

    <div class="container-fluid">

        @header([
            'name' => __('Settings'),
            'title' => __('customize your experience'),
        ])

    </div>

@endsection

@section('content')

    <div class="container-fluid">

        @success(['message' => session('success')])

        <section class="box-typical box-typical-padding">

            @form(['method' => 'patch', 'url' => '/settings'])

                <div class="row">

                    <label class="col-sm-2 form-control-label">@lang('Theme')</label>
                    <div class="col-sm-4">

                        @formGroup([
                            'no_icon' => 1,
                            'error' => $errors->has('theme') ? $errors->first('theme') : ''
                        ])

                            @select([
                                'name' => 'theme',
                                'selected' => Request::user()->meta->theme ?? '',
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

                </div>

                <div class="row">

                    <label class="col-sm-2 form-control-label">@lang('Language')</label>
                    <div class="col-sm-4">

                        @formGroup([
                            'no_icon' => 1,
                            'error' => $errors->has('language') ? $errors->first('language') : ''
                        ])

                            @select([
                                'name' => 'language',
                                'selected' => Request::user()->meta->language ?? config('app.locale'),
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

                <div class="m-t">
                        
                    <button type="submit" class="btn btn-info">@lang('Save')</button>

                </div>

            @endform

        </section>

    </div>

@endsection