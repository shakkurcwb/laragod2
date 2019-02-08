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
                            'clean' => 1,
                            'error' => $errors->has('theme') ? $errors->first('theme') : ''
                        ])

                            @select2([
                                'name' => 'theme',
                                'selected' => Request::user()->meta->theme ?? '',
                                'options' => [

                                    __('Main Themes') => [
                                        '' => 'Original',
                                        'theme-rebecca-purple' => 'Rebecca Purple',
                                        'theme-picton-blue' => 'Picton Blue',
                                        'theme-picton-blue-white-ebony' => 'Picton Blue White Ebony'
                                    ],

                                    __('Side Themes') => [
                                        'theme-side-tin' => 'Tin',
                                        'theme-side-ebony-clay' => 'Ebony Clay',
                                        'theme-side-madison-caribbean' => 'Madison Caribbean',
                                        'theme-side-caesium-dark-caribbean' => 'Caesium Dark Caribbean',
                                        'theme-side-litmus-blue' => 'Litmus Blue',
                                    ],

                                ],
                            ])

                        @endformGroup

                    </div>

                </div>

                <div class="row">

                    <label class="col-sm-2 form-control-label">@lang('Language')</label>
                    <div class="col-sm-4">

                        @formGroup([
                            'clean' => 1,
                            'error' => $errors->has('language') ? $errors->first('language') : ''
                        ])

                            @select2([
                                'name' => 'language',
                                'type' => 'flag',
                                'selected' => Request::user()->meta->language ?? config('app.locale'),
                                'options' => [
                                    
                                    'pt-BR' => ['br', 'Português'],
                                    'en' => ['us', 'English'],
                                    'fr' => ['fr', 'Français'],
                                    'es' => ['es', 'Español'],

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