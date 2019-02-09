
@isset($avatar)

    @if (!empty($url))

        <img class="{{ $class ?? '' }}" src="{{ asset('storage/' . $url) }}?{{ rand() }}" alt="Avatar">

    @else

        <img class="{{ $class ?? '' }}" src="{{ asset('img/avatar-2-64.png') }}" alt="No Avatar">

    @endif

@else

    <img class="{{ $class ?? '' }}" src="{{ url($url ?? '#') }}" alt="{{ $alt ?? '' }}">

@endisset