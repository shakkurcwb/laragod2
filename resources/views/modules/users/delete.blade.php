@extends('shared.theme')

@section('header')

    <div class="container-fluid">

        @header([
            'name' => __('Delete User'),
            'with_action' => 1,
            'url' => '/users',
        ])

    </div>

@endsection

@section('content')
    
    <div class="container-fluid">

        <section class="offset-md-3 col-md-6">

            @form(['method' => 'delete', 'url' => '/users/' . $user->id])

                <div class="alert alert-danger alert-avatar alert-no-border fade show" role="alert">

                    <div class="avatar-preview avatar-preview-32">
                        
                        @img(['avatar' => 1, 'url' => $user->meta->avatar ?? ''])

                    </div>
                    
                    <strong>@lang('Are you sure you want to delete this user?')</strong>
                    <br>
                    <span>@lang('Name'): {{ $user->name }}</span>
                    <br>
                    <span>@lang('Email'): {{ $user->email }}</span>

                    <div class="alert-btns">

                        <button type="summit" class="btn btn-rounded">@lang('Yes')</button>

                        <a class="btn btn-rounded" href="{{ url('/users') }}">@lang('No')</a>

                    </div>
                </div>

            @endform

        </section>

    </div>

@endsection