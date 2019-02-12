@extends('shared.theme')

@section('styles')

    <link rel="stylesheet" href="{{ asset('css/separate/pages/profile.min.css') }}">
    <style>

        .profile-card .profile-card-photo {
            height: 100% !important;
        }

    </style>

@endsection

@section('header')

    <div class="container-fluid">

        @header([
            'name' => __('User Profile'),
        ])

    </div>

@endsection

@section('content')
    
    <div class="container-fluid">

        <div class="row">

            <div class="col-12 col-lg-3">

                <section class="box-typical">

                    <div class="profile-card">

                        <div class="profile-card-photo">

                            @img(['avatar' => 1, 'url' => $user->meta->avatar ?? ''])

                        </div>

                        <div class="profile-card-name">{{ $user->name }}</div>

                        <div class="profile-card-status">{{ $user->meta->headline ?? '' }}</div>
                        
                        <div class="profile-card-location">

                            @isset($user->meta->position) {{ $user->meta->position }} @endisset
                            @isset($user->meta->company) @lang('at') {{ $user->meta->company }} @endisset

                        </div>

                        <a class="btn btn-rounded btn-info" href="mailto:{{ $user->email }}">@lang('Send Email')</a>
                        
                    </div>

                    <div class="profile-statistic tbl">
                        <div class="tbl-row">

                            <div class="tbl-cell">
                                
                                @isset($user->is_admin)

                                    <span class="label label-pill label-danger">@lang('admin')</span>

                                @else

                                    <span class="label label-pill label-success">@lang('active')</span>

                                @endisset

                            </div>

                            <div class="tbl-cell">

                                @icon(['type' => 'mini-flag', 'icon' => $user->meta->language ?? config('app.locale')])

                            </div>

                        </div>
                    </div>

                </section>

            </div>

            <div class="col-12 col-lg-6">

                @if (!empty($user->meta->summary) OR
                    !empty($user->meta->interests) OR
                    !empty($user->meta->position) OR
                    !empty($user->meta->company))

                <section class="box-typical">

                    <header class="box-typical-header-sm">@lang('Additional Informations')</header>

                    @isset($user->meta->summary)
                    
                        <article class="profile-info-item">

                            <header class="profile-info-item-header">
                                @icon(['icon' => 'star', 'class' => 'font-icon'])
                                @lang('Summary')
                            </header>

                            <div class="text-block text-block-typical">
                                <p>{{ $user->meta->summary }}</p>
                            </div>

                        </article>

                    @endisset

                    @isset($user->meta->interests)

                        <article class="profile-info-item">

                            <header class="profile-info-item-header">
                                @icon(['icon' => 'star', 'class' => 'font-icon'])
                                @lang('Interests')
                            </header>

                            <div class="profile-interests">

                                @foreach(explode(',', $user->meta->interests) as $interest)

                                    <a target="_blank" href="https://google.com/search?q={{ $interest }}" class="label label-light-grey">{{ $interest }}</a>

                                @endforeach

                            </div>

                        </article>

                    @endisset

                    @if (!empty($user->meta->position) AND !empty($user->meta->company))

                        <article class="profile-info-item">

                            <header class="profile-info-item-header">
                                @icon(['icon' => 'suitcase', 'class' => 'font-icon'])
                                @lang('Professional')
                            </header>

                            <ul class="exp-timeline">
                                <li class="exp-timeline-item">
                                    <div class="dot"></div>
                                    <div class="tbl">
                                        <div class="tbl-row">

                                            <div class="tbl-cell">
                                                <div class="exp-timeline-range">{{ $user->meta->position }} @lang('at') {{ $user->meta->company }}</div>

                                                @if (!empty($user->meta->city) AND !empty($user->meta->country))

                                                    <div class="exp-timeline-status">{{ $user->meta->city }}, {{ $user->meta->country }}</div>

                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </article>

                    @endif

                </section>

                @endif

            </div>

            <div class="col-12 col-lg-3">

                @if (!empty($user->meta->facebook) OR
                    !empty($user->meta->instagram) OR
                    !empty($user->meta->linkedin) OR
                    !empty($user->meta->twitter))

                <section class="box-typical">

                    <ul class="profile-links-list">

                        @isset($user->meta->facebook)

                            <li class="nowrap">
                                @icon(['icon' => 'facebook-square', 'class' => 'font-icon'])
                                <a target="_blank" href="https://fb.com/{{ $user->meta->facebook }}">facebook.com/<b>{{ $user->meta->facebook }}</b></a>
                            </li>

                        @endisset

                        @isset($user->meta->instagram)

                            <li class="nowrap">
                                @icon(['icon' => 'instagram', 'class' => 'font-icon'])
                                <a target="_blank" href="https://instagram.com/{{ $user->meta->instagram }}">instagram.com/<b>{{ $user->meta->instagram }}</b></a>
                            </li>

                        @endisset

                        @isset($user->meta->linkedin)

                            <li class="nowrap">
                                @icon(['icon' => 'linkedin-square', 'class' => 'font-icon'])
                                <a target="_blank" href="https://linkedin.com/in/{{ $user->meta->linkedin }}">linkedin.com/in/<b>{{ $user->meta->linkedin }}</b></a>
                            </li>

                        @endisset

                        @isset($user->meta->twitter)

                            <li class="nowrap">
                                @icon(['icon' => 'twitter', 'class' => 'font-icon'])
                                <a target="_blank" href="https://twitter.com/{{ $user->meta->twitter }}">twitter.com/<b>{{ $user->meta->twitter }}</b></a>
                            </li>

                        @endisset

                    </ul>

                </section>

                @endif

            </div>

        </div>

    </div>

@endsection