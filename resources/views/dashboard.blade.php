@extends('shared.theme')

@section('styles')

    <link rel="stylesheet" href="{{ asset('css/separate/pages/widgets.min.css') }}">

@endsection

@section('header')

    <div class="container-fluid">

        @header([
            'name' => __('Dashboard'),
        ])

    </div>

@endsection

@section('content')

    <div class="container-fluid">

        <section>

            <div class="row">

                <div class="col-6 col-sm-3 col-md-3">

                    <article class="statistic-box purple">
                        <div>
                            <div class="number">{{ $usersCount ?? 0 }}</div>
                            <div class="caption"><div>@lang('Users')</div></div>
                        </div>
                    </article>

                </div>
            
            </div>

        </section>


        <section>

            <div class="row">

                <div class="col-xl-6 dashboard-column">

                    <article class="box-typical box-typical-dashboard panel panel-default scrollable">

                        <header class="box-typical-header panel-heading ui-sortable-handle">
                            <h3 class="panel-title">@lang('Latest Users')</h3>
                        </header>

                        @empty($latestUsers)

                            @warn(['message' => __('No records.')])
                        
                        @else

                            <div class="contact-row-list">

                                @foreach($latestUsers as $user)

                                <article class="contact-row">
                                    <div class="user-card-row">

                                        <div class="tbl-row">

                                            <div class="tbl-cell tbl-cell-photo">
                                                <a href="{{ url('/users/' . $user->id) }}">
                                                    @img(['avatar' => 1, 'url' => $user->meta->avatar ?? ''])
                                                </a>
                                            </div>

                                            <div class="tbl-cell">
                                                <p class="user-card-row-name">
                                                    <a href="{{ url('/users/' . $user->id) }}">{{ $user->name }}</a>
                                                </p>
                                                <p class="user-card-row-mail">
                                                    <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                                </p>
                                            </div>

                                            <div class="tbl-cell tbl-cell-status">{{ $user->created_at->format('d M Y') }}</div>

                                        </div>

                                    </div>
                                </article>

                                @endforeach

                            </div>

                        @endempty

                    </article>

                </div>

            </div>

        </section>

    </div>

@endsection