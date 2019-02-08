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

        <section>

            @form(['method' => 'patch', 'url' => '/profile'])

              @tab

                @tabNav

                    @tabItem([
                        'idx' => 1,
                        'is_active' => 1,
                        'icon' => 'user',
                        'text' => '',
                    ])

                    @tabItem([
                        'idx' => 2,
                        'icon' => 'photo',
                        'text' => '',
                    ])

                    @tabItem([
                        'idx' => 3,
                        'icon' => 'briefcase',
                        'text' => '',
                    ])

                    @tabItem([
                        'idx' => 4,
                        'icon' => 'hashtag',
                        'text' => '',
                    ])

                    @tabItem([
                        'idx' => 4,
                        'icon' => 'feed',
                        'text' => '',
                    ])

                @endtabNav

                @tabContent

                @endtabContent
              
              @endtab

            @endform

        </section>

    </div>

@endsection