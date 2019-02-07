
<div class="checkbox">

    <input
        name="{{ $name }}"
        id="{{ $name }}"
        type="checkbox"
        value="1"
        {{ old($name) ? 'checked' : ( !empty($checked) ? 'checked' : '' ) }}
        {{ !empty($disabled) ? 'disabled' : '' }}
    />

    <label for="{{ $name }}">{{ $title ?? '' }}</label>

</div>