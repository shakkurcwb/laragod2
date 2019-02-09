
<div class="form-group">

    @empty($no_icon)

        <div class="form-control-wrapper form-control-icon-{{ !empty($on_left) ? 'left' : 'right' }}">
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