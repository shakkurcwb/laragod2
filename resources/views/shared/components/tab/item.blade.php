
<li class="nav-item">

    <a class="nav-link {{ !empty($is_active) ? 'active show' : '' }}"
        href="#tabs-{{ $uui ?? 1 }}-tab-{{ $idx ?? 1 }}"
        role="tab"
        data-toggle="tab"
        aria-selected="true"
    >
        <span class="nav-link-in color-{{ !empty($has_error) ? 'red' : '' }}">

            @icon([ 'icon' => $icon, 'color' => ( !empty($has_error) ? 'red' : '' ) ])
            <span class="d-none d-md-block">@lang($text ?? '')</span>

        </span>
    </a>

</li>