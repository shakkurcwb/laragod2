
@isset($avatar)

    @if (!empty($url) && file_exists(storage_path($url)))

        <img class="{{ $class ?? '' }}" src="{{ storage_path($url) }}" alt="Avatar">

    @else

        <img class="{{ $class ?? '' }}" src="img/avatar-2-64.png" alt="No Avatar">

    @endif

@else

    <img class="{{ $class ?? '' }}" src="{{ url($url ?? '#') }}" alt="{{ $alt ?? '' }}">

@endisset