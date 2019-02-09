
<div class="tab-pane fade {{ !empty($is_active) ? 'in show active' : '' }}"
    id="tabs-{{ $uui ?? 1 }}-tab-{{ $idx ?? 1 }}"
    role="tabpanel"
>

    {{ $slot }}

</div>