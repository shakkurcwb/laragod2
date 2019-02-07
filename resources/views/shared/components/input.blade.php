
<input
    name="{{ $name }}"
    id="{{ $name }}"
    placeholder="{{ $title ?? '' }}"
    type="{{ $type ?? 'text' }}"
    class="form-control form-control-rounded {{ !empty($has_error) ? 'form-control-danger' : '' }}"
    value="{{ old($name) ?? ( $value ?? ( Request::get($name) ?? '' ) ) }}"
    {{ !empty($is_disabled) ? 'readonly' : '' }}
/>
