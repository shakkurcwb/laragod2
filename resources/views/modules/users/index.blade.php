@extends('shared.theme')

@section('styles')

    <link rel="stylesheet" href="{{ asset('css/separate/pages/user.min.css') }}">
    <style>

        .card-user .card-user-photo {
            height: 100% !important;
        }

    </style>

@endsection

@section('header')

    <div class="container-fluid">

        @header([
            'name' => __('Users'),
            'title' => __('manage our community'),
        ])

    </div>

@endsection

@section('content')

    <div class="container-fluid">

        @success(['message' => session('success')])

        <section>

            @form(['url' => '/users/search'])

                @formGroup(['no_icon' => 1])

                    <div class="input-group">

                        <div class="input-group-prepend">

                            <a href="{{ url('/users/create') }}" class="btn btn-info">
                                @icon([ 'icon' => 'plus' ])
                            </a>

                        </div>

                        @input([
                            'name' => 'search',
                            'title' => __('Search'),
                            'value' => Request::get('search'),
                        ])

                        <div class="input-group-append">

                            <button type="submit" class="btn btn-primary">
                                @icon([ 'icon' => 'search' ])
                            </button>

                        </div>

                    </div>

                @endformGroup

            @endform

        </section>

        <section>

            @tab

                @tabNav

                    @tabItem([
                        'idx' => 1,
                        'is_active' => 1,
                        'icon' => 'sticky-note-o',
                        'text' => __('Cards'),
                    ])

                    @tabItem([
                        'idx' => 2,
                        'icon' => 'list-alt',
                        'text' => __('Table'),
                    ])

                @endtabNav

                @tabContent

                    @tabPanel(['idx' => 1, 'is_active' => 1])

                        <article>

                            @if (count($users) == 0)

                                @warn(['message' => __('No records.')])

                            @else

                                @cardGrid

                                    @foreach($users as $user)

                                        @card

                                            @if ($user->is_admin)

                                                <div class="card-user-action float-left">
                                                    <span class="label label-pill label-danger">admin</span>
                                                </div>

                                            @endif

                                            <div class="card-user-action float-right">
                                                <div class="dropdown dropdown-user-menu">

                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        @icon(['type' => 'glyphicon', 'icon' => 'option-vertical'])
                                                    </button>

                                                    <div class="dropdown-menu dropdown-menu-right">

                                                        <a class="dropdown-item" href="{{ url('/users/' . $user->id) }}">
                                                            @icon(['type' => 'font-icon', 'icon' => 'contacts', 'class' => 'font-icon'])
                                                            <span class="lbl">@lang('Show')</span>
                                                        </a>

                                                        <a class="dropdown-item" href="{{ url('/users/' . $user->id . '/edit') }}">
                                                            @icon(['type' => 'font-icon', 'icon' => 'pencil', 'class' => 'font-icon'])
                                                            <span class="lbl">@lang('Edit')</span>
                                                        </a>

                                                        <a class="dropdown-item" href="{{ url('/users/' . $user->id . '/delete') }}">
                                                            @icon(['type' => 'font-icon', 'icon' => 'trash', 'class' => 'font-icon'])
                                                            <span class="lbl">@lang('Delete')</span>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                            
                                            <div class="card-user-photo">
                                                @img([
                                                    'avatar' => 1,
                                                    'url' => $user->meta->avatar ?? ''
                                                ])
                                            </div>

                                            <div class="card-user-name">{{ $user->name }}</div>

                                            <div class="card-user-status">
                                                <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                            </div>

                                            <div class="card-user-social">

                                                @isset ($user->meta->facebook)

                                                    <a target="_blank" href="https://fb.com/{{ $user->meta->facebook }}">
                                                        <i class="font-icon font-icon-facebook"></i>
                                                    </a>

                                                @endisset

                                                @isset ($user->meta->instagram)
                                                    
                                                    <a target="_blank" href="https://instagram.com/{{ $user->meta->instagram }}">
                                                        <i class="font-icon font-icon-instagram"></i>
                                                    </a>

                                                @endisset

                                                @isset ($user->meta->linkedin)

                                                    <a target="_blank" href="https://linkedin.com/in/{{ $user->meta->linkedin }}">
                                                        <i class="font-icon font-icon-linkedin"></i>
                                                    </a>

                                                @endisset

                                                @isset ($user->meta->twitter)

                                                    <a target="_blank" href="https://twitter.com/{{ $user->meta->twitter }}">
                                                        <i class="font-icon font-icon-twitter"></i>
                                                    </a>

                                                @endisset
                                                
                                            </div>

                                        @endcard

                                    @endforeach

                                @endcardGrid

                            @endempty

                        </article>

                    @endtabPanel

                    @tabPanel(['idx' => 2])

                        <article>

                            @if (count($users) == 0)

                                @warn(['message' => __('No records.')])

                            @else

                                @table

                                    @tableHead

                                        @tableRow

                                            @tableCol(['header' => 1, 'width' => 1]) @lang('#') @endtableCol
                                            @tableCol(['header' => 1]) @lang('Name') @endtableCol
                                            @tableCol(['header' => 1]) @lang('Email') @endtableCol
                                            @tableCol(['header' => 1, 'width' => '150px', 'class' => 'text-center']) @lang('Actions') @endtableCol

                                        @endtableRow

                                    @endtableHead

                                    @tableBody

                                        @foreach($users as $user)

                                            @tableRow

                                                @tableCol(['class' => 'table-photo'])
                                                
                                                    @img(['avatar' => 1, 'url' => $user->meta->avatar ?? ''])

                                                @endtableCol
                                                
                                                @tableCol
                                                
                                                    <span>{{ $user->name }}</span>

                                                    @if ($user->is_admin)

                                                        <span class="label label-pill label-danger">admin</span>

                                                    @endif
                                                
                                                @endtableCol

                                                @tableCol <a href="mailto:{{ $user->email }}">{{ $user->email }}</a> @endtableCol
                                                
                                                @tableCol(['class' => 'text-center'])

                                                    <a class="btn btn-sm btn-primary" href="{{ url('/users/' . $user->id) }}">
                                                        @icon(['type' => 'font-icon', 'icon' => 'contacts', 'class' => 'font-icon'])
                                                    </a>

                                                    <a class="btn btn-sm btn-primary"  href="{{ url('/users/' . $user->id . '/edit') }}">
                                                        @icon(['type' => 'font-icon', 'icon' => 'pencil', 'class' => 'font-icon'])
                                                    </a>

                                                    <a class="btn btn-sm btn-danger"  href="{{ url('/users/' . $user->id . '/delete') }}">
                                                        @icon(['type' => 'font-icon', 'icon' => 'trash', 'class' => 'font-icon'])
                                                    </a>

                                                @endtableCol

                                            @endtableRow

                                        @endforeach

                                    @endtableBody

                                @endtable

                            @endif

                        </article>

                    @endtabPanel

                    <div class="m-t">
                        
                        {{ $users->links ?? '' }}
        
                    </div>

                @endtabContent

            @endtab

        </section>

    </div>

@endsection