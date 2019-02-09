
<div class="tbl">
    <div class="tbl-row">

        <div class="tbl-cell">
            <h4>
                <span>{{ $name }}</span>
                <small class="text-muted d-none d-md-block">{{ $title ?? '' }}</small>
            </h4>
        </div>

        @isset($with_action)

            <div class="tbl-cell tbl-cell-action">
                <a href="{{ url($url ?? '/home') }}" class="btn btn-rounded btn-secondary"> @icon(['icon' => 'arrow-left']) </a>
            </div>

        @endisset

    </div>
</div>