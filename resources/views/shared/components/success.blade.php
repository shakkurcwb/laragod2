
@isset($message)

    <div class="alert alert-aquamarine alert-fill alert-close alert-dismissible fade show" role="alert">
        
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <span>@lang($message)</span>

    </div>

@endisset