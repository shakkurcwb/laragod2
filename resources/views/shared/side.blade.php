
<ul class="side-menu-list">

    <li class="blue-dirty {{ Request::is('/home') ? 'opened' : '' }}">

        <a href="{{ url('/home') }}">
            @icon(['icon' => 'home'])
            <span class="lbl">@lang('Home')</span>
        </a>

    </li>

</ul>

<header class="side-menu-title">Admin</header>

<ul class="side-menu-list">

    <li class="blue-dirty {{ Request::is('/dashboard') ? 'opened' : '' }}">

        <a href="{{ url('/dashboard') }}">
            @icon(['icon' => 'dashboard'])
            <span class="lbl">@lang('Dashboard')</span>
        </a>

    </li>

    <li class="blue-dirty {{ Request::is('/users*') ? 'opened' : '' }}">

        <a href="{{ url('/users') }}">
            @icon(['icon' => 'users'])
            <span class="lbl">@lang('Users')</span>
        </a>

    </li>

</ul>