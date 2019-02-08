
<select
    name="{{ $name }}"
    id="{{ $name }}"
    class="{{ !empty($type) ? 'select2-' . $type : 'select2' }}"
    {{ !empty($is_disabled) ? 'disabled' : '' }}
>

    <option value></option>

    @empty($type)

        @foreach ($options as $value => $title)

            @if (is_array($title))

                <optgroup label="{{ $value }}">

                @foreach ($title as $v => $t)

                    <option value="{{ $v }}" {{ $selected == $v ? 'selected' : '' }}>{{ $t }}</option>

                @endforeach

            @else

                <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }}>{{ $title }}</option>

            @endif

        @endforeach

    @else

        @foreach ($options as $value => $option)

            <option value="{{ $value }}" data-{{ $type }}="{{ $option[0] }}" {{ $selected == $value ? 'selected' : '' }}>{{ $option[1] }}</option>

        @endforeach

    @endempty

</select>