
<textarea
    name="{{ $name }}"
    rows="{{ $rows ?? 1 }}"
    class="form-control {{ !empty($has_error) ? 'form-control-danger' : '' }} {{ !empty($with_tags) ? 'tag-editor' : '' }}"
    placeholder="{{ !empty($title) ? __($title) : '' }}"

>{{ old($name) ?? ( $value ?? '' ) }}</textarea>