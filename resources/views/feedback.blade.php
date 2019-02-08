@extends('shared.theme')

@section('header')

    <div class="container-fluid">

        @header([
            'name' => __('Feedback'),
            'title' => __('let we know more about'),
        ])

    </div>

@endsection

@section('content')

    <div class="container-fluid">

        @success(['message' => session('success')])

        <section class="box-typical box-typical-padding">

            @form(['method' => 'post', 'url' => '/feedback'])

                <div class="row">

                    <label class="col-sm-2 form-control-label">@lang('Subject')</label>
                    <div class="col-sm-10">

                        @formGroup([
                            'clean' => 1,
                            'error' => $errors->has('subject') ? $errors->first('subject') : ''
                        ])

                            @select([
                                'name' => 'subject',
                                'has_error' => $errors->has('subject'),
                                'selected' => '',
                                'options' => [

                                    'account' => 'Original',
                                    'email' => 'Rebecca Purple',
                                    'remove' => 'Picton Blue',
                                    'rate_us' => 'Picton Blue White Ebony',

                                ],
                            ])

                        @endformGroup

                    </div>

                </div>

                <div class="row">

                    <label class="col-sm-2 form-control-label">@lang('Description')</label>
                    <div class="col-sm-10">

                        @formGroup([
                            'error' => $errors->has('description') ? $errors->first('description') : ''
                        ])

                            @textarea([
                                'name' => 'description',
                                'title' => __('Describe something amazing, so we can handle it.'),
                                'rows' => 4,
                                'has_error' => $errors->has('description'),
                            ])

                            @icon(['icon' => 'align-center', 'has_error' => $errors->has('description')])

                        @endformGroup

                    </div>

                </div>

                <div class="m-t">
                        
                    <button type="submit" class="btn btn-primary">@lang('Send')</button>

                </div>

            @endform

        </section>

    </div>

@endsection