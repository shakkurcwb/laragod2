@extends('shared.theme')

@section('styles')

    <link rel="stylesheet" href="{{ asset('css/separate/pages/others.min.css') }}">

@endsection

@section('header')

    <div class="container-fluid">

        @header([
            'name' => __('Help'),
            'title' => __('we want to support you'),
        ])

    </div>

@endsection

@section('content')

    <div class="container-fluid">

        <section class="box-typical faq-page">

            @form(['method' => 'post', 'url' => '/help/search', 'class' => 'faq-page-header-search'])

                <div class="search">
                    @input(['name' => 'search', 'title' => __('Find answers (help, password, billing, other topics)')])
                    <button type="submit" class="find">
                        @icon(['type' => 'font', 'icon' => 'search'])
                    </button>
                </div>

            @endform

            <section class="faq-page-cats">

                <div class="row">

                    <div class="col-md-4">
                        <div class="faq-page-cat">

                            <div class="faq-page-cat-icon"> @img(['url' => 'img/faq-1.png']) </div>
                            <div class="faq-page-cat-title">
                                <a href="#">@lang('Getting Started')</a>
                            </div>
                            <div class="faq-page-cat-txt">
                                <span>@lang('Learn the basic to get the most out of our platform')</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="faq-page-cat">

                            <div class="faq-page-cat-icon"> @img(['url' => 'img/faq-2.png']) </div>
                            <div class="faq-page-cat-title">
                                <a href="{{ url('/feedback') }}">@lang('Report a Bug')</a>
                            </div>
                            <div class="faq-page-cat-txt">
                                <span>@lang('Maintain the quality we all expect')</span>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="faq-page-cat">

                            <div class="faq-page-cat-icon"> @img(['url' => 'img/faq-3.png']) </div>
                            <div class="faq-page-cat-title">
                                <a href="{{ url('/feedback') }}">@lang('Send Feedback')</a>
                            </div>
                            <div class="faq-page-cat-txt">
                                <span>@lang('Support our job with a long feedback')</span>
                            </div>
                        
                        </div>
                    </div>

                </div>
                
            </section>

            <section class="faq-page-questions">

                <h2>@lang('Common Questions')</h2>

                <div class="row">

                    <div class="col-md-6">
                        <article class="faq-page-quest">
                            <header class="faq-page-quest-title">
                                <a href="#">Lorem ipsum dolor sit amet, consectetur laboris</a>
                            </header>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </article>
                    </div>

                    <div class="col-md-6">
                        <article class="faq-page-quest">
                            <header class="faq-page-quest-title">
                                <a href="#">Lorem ipsum dolor sit amet, consectetur</a>
                            </header>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </article>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <article class="faq-page-quest">
                            <header class="faq-page-quest-title">
                                <a href="#">Duis aute irure  dolor in reprehenderit velit</a>
                            </header>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="faq-page-quest">
                            <header class="faq-page-quest-title">
                                <a href="#">Duis aute irure  dolor in reprehenderit velit</a>
                            </header>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </article>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <article class="faq-page-quest">
                            <header class="faq-page-quest-title">
                                <a href="#">Lorem ipsum dolor sit amet, consectetur laboris</a>
                            </header>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="faq-page-quest">
                            <header class="faq-page-quest-title">
                                <a href="#">Lorem ipsum dolor sit amet, consectetur</a>
                            </header>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </article>
                    </div>
                </div>

            </section>

        </section>

    </div>

@endsection