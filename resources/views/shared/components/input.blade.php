
<input
    name="{{ $name }}"
    id="{{ $name }}"
    placeholder="{{ $title ?? '' }}"
    type="{{ $type ?? 'text' }}"
    class="form-control {{ !empty($has_error) ? 'form-control-danger' : '' }}"
    value="{{ old($name) ?? ( $value ?? '' ) }}"
    {{ !empty($is_disabled) ? 'readonly' : '' }}
/>
