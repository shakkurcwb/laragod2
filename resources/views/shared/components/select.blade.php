<select
    name="{{ $name }}"
    id="{{ $name }}"
    class="form-control {{ !empty($has_error) ? 'form-control-danger' : '' }}"
    {{ !empty($is_disabled) ? 'disabled' : '' }}
>

    <option value></option>

    @isset($options)

        @foreach ($options as $value => $title)

            <option value="{{ $value }}" {{ ( old($name) ?? ( $selected ?? '' ) ) == $value ? 'selected' : '' }}>{{ $title }}</option>

        @endforeach

    @endisset

</select>