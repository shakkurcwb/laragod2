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

                            @select([
                                'name' => 'theme',
                                'has_error' => $errors->has('theme'),
                                'selected' => Request::user()->meta->theme,
                                'options' => [

                                    __('Main Themes') => [
                                        'original' => 'Original',
                                        'rebecca-purple' => 'Rebecca Purple',
                                        'picton-blue' => 'Picton Blue',
                                        'picton-blue-white-ebony' => 'Picton Blue White Ebony'
                                    ],

                                    __('Side Themes') => [
                                        'side-tin' => 'Tin',
                                        'side-ebony-clay' => 'Ebony Clay',
                                        'side-madison-caribbean' => 'Madison Caribbean',
                                        'side-caesium-dark-caribbean' => 'Caesium Dark Caribbean',
                                        'side-litmus-blue' => 'Litmus Blue',
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

                            @select([
                                'name' => 'language',
                                'type' => 'flag',
                                'has_error' => $errors->has('language'),
                                'selected' => Request::user()->meta->language,
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
                        
                    <button type="submit" class="btn btn-primary">@lang('Save')</button>

                </div>

            @endform

        </section>

    </div>

@endsection