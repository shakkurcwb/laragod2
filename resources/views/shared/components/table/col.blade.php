
@empty($header)

    <td width="{{ $width ?? '' }}" class="{{ $class ?? '' }}">{{ $slot }}</td>

@else

    <th width="{{ $width ?? '' }}" class="{{ $class ?? '' }}">{{ $slot }}</th>

@endempty