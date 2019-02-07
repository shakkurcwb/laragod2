
<div class="form-group">

    @empty($clean)

        <div class="form-control-wrapper form-control-icon-{{ !empty($left) ? 'left' : 'right' }}">
            {{ $slot }}
        </div>

    @else

        {{ $slot }}
    
    @endempty

    @empty($error)
    
    @else

        <small class="text-danger">
            @icon(['icon' => 'long-arrow-right', 'color' => 'red']) 
            @lang($error)
        </small>

    @endempty

</div>