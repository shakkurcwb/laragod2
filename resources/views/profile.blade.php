@extends('shared.theme')

@section('header')

    <div class="container-fluid">

        @header([
            'name' => __('Profile'),
            'title' => __('we take care of your data'),
        ])

    </div>

@endsection

@section('content')

    <div class="container-fluid">

        @success(['message' => session('success')])

        <section class="box-typical box-typical-padding">

            @form(['method' => 'patch', 'url' => '/profile'])

                

            @endform

        </section>

    </div>

@endsection