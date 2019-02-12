@extends('shared.theme')

@section('header')

    <div class="container-fluid">

        @header([
            'name' => $user->name,
        ])

    </div>

@endsection

@section('content')
    
    <div class="container-fluid">

        @success(['message' => session('success')])

        <section>

        </section>

    </div>

@endsection