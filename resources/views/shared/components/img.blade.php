
@isset($avatar)

    @if (!empty($url) && file_exists(asset($url)))

        <img class="{{ $class ?? '' }}" src="{{ asset($url) }}" alt="Avatar">

    @else

        <img class="{{ $class ?? '' }}" src="{{ asset('img/avatar-2-64.png') }}" alt="No Avatar">

    @endif

@else

    <img class="{{ $class ?? '' }}" src="{{ url($url ?? '#') }}" alt="{{ $alt ?? '' }}">

@endisset