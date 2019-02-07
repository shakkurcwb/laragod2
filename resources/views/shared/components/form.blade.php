
<form method="post"
    name="{{ 'frm_' . ( $method ?? '' ) }}"
    id={{ 'frm_' . ( $method ?? '' ) }}
    class="{{ $class ?? '' }}"
    action="{{ url( $url ?? '#' ) }}"
    enctype="{{ !empty($fileUpload) ? 'multipart/form-data' : 'application/x-www-form-urlencoded' }}"
>

    @csrf
    @method($method ?? 'post')

    {{ $slot }}

</form>