@extends('shared.theme')

@section('header')

    <div class="container-fluid">

        @header([
            'name' => __('Dashboard'),
        ])

    </div>

@endsection

@section('content')

    <div class="container-fluid">

        @success(['message' => session('success')])

        <section class="box-typical box-typical-padding">

            @form(['method' => 'post', 'url' => '/feedback'])

                

            @endform

        </section>

    </div>

@endsection