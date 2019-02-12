
@empty($has_error)

    <span class="color-{{ $color ?? '' }} {{ $class ?? '' }}">

        @isset($type)

            @if ($type == 'font-icon')
                        
                <span class="font-icon font-icon-{{ $icon }}"></span>

            @elseif ($type == 'glyphicon')

                <span class="glyphicon glyphicon-{{ $icon }}" aria-hidden="true"></span>

            @elseif ($type == 'flag')
                
                <div class="flag-wrapper">
                    <div class="img-thumbnail flag flag-icon-background flag-icon-{{ $icon }}" title="{{ $icon }}" id="{{ $icon }}"></div>
                </div>

            @elseif ($type == 'mini-flag')
                
                <span class="flag-icon flag-icon-{{ $icon == 'pt-BR' ? 'br' : ( $icon == 'en' ? 'us' : $icon ) }}"></span>

            @else

                <i class="fa fa-{{ $icon }}"></i>

            @endif

        @else

            <i class="fa fa-{{ $icon }}"></i>

        @endisset

    </span>

@else

    <i class="fa fa-times color-red"></i>

@endisset