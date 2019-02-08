
<div class="container-fluid">

    <a href="{{ url('/') }}" class="site-logo">
        
        <img class="hidden-md-down" src="{{ ( empty(Request::user()->meta->theme) OR Request::user()->meta->theme == 'original' ) ? asset('img/logo-2.png') : asset('img/logo-2-white.png') }}" alt="Logo Image">
        <img class="hidden-lg-down" src="{{ asset('img/logo-2-mob.png') }}" alt="Logo Image">

    </a>

    <button class="hamburger hamburger-htla">
        <span>toggle menu</span>
    </button>

    <div class="site-header-content">

        <div class="site-header-content-in">

            <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
                <span>toggle menu</span>
            </button>

            <div class="site-header-shown">

                {{--

                <span class="float-left">
                    <span class="label label-pill label-danger">$ {{ '2' }} @lang('credits')</span>
                </span>

                <div class="dropdown dropdown-notification messages">

                    <a href="#" class="header-alarm dropdown-toggle active" id="dd-notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @icon(['icon' => 'bell'])
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification">
                        <div class="dropdown-menu-notif-header">
                            Notifications
                            <span class="label label-pill label-danger">4</span>
                        </div>
                        <div class="dropdown-menu-notif-list">
                            <div class="dropdown-menu-notif-item">
                                <div class="photo">
                                    <img src="img/photo-64-1.jpg" alt="">
                                </div>
                                <div class="dot"></div>
                                <a href="#">Morgan</a> was bothering about something
                                <div class="color-blue-grey-lighter">7 hours ago</div>
                            </div>
                            <div class="dropdown-menu-notif-item">
                                <div class="photo">
                                    <img src="img/photo-64-2.jpg" alt="">
                                </div>
                                <div class="dot"></div>
                                <a href="#">Lioneli</a> had commented on this <a href="#">Super Important Thing</a>
                                <div class="color-blue-grey-lighter">7 hours ago</div>
                            </div>
                            <div class="dropdown-menu-notif-item">
                                <div class="photo">
                                    <img src="img/photo-64-3.jpg" alt="">
                                </div>
                                <div class="dot"></div>
                                <a href="#">Xavier</a> had commented on the <a href="#">Movie title</a>
                                <div class="color-blue-grey-lighter">7 hours ago</div>
                            </div>
                            <div class="dropdown-menu-notif-item">
                                <div class="photo">
                                    <img src="img/photo-64-4.jpg" alt="">
                                </div>
                                <a href="#">Lionely</a> wants to go to <a href="#">Cinema</a> with you to see <a href="#">This Movie</a>
                                <div class="color-blue-grey-lighter">7 hours ago</div>
                            </div>
                        </div>
                        <div class="dropdown-menu-notif-more">
                            <a href="#">See more</a>
                        </div>
                    </div>

                </div>

                <div class="dropdown dropdown-notification messages">

                    <a href="#" class="header-alarm dropdown-toggle active" id="dd-messages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @icon(['icon' => 'envelope'])
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-messages" aria-labelledby="dd-messages">

                        <div class="dropdown-menu-messages-header">
                            <ul class="nav" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active"
                                        data-toggle="tab"
                                        href="#tab-incoming"
                                        role="tab">
                                        Inbox
                                        <span class="label label-pill label-danger">8</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        data-toggle="tab"
                                        href="#tab-outgoing"
                                        role="tab">Outbox</a>
                                </li>
                            </ul>
                            <!--<button type="button" class="create">
                                <i class="font-icon font-icon-pen-square"></i>
                            </button>-->
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-incoming" role="tabpanel">
                                <div class="dropdown-menu-messages-list">
                                    <a href="#" class="mess-item">
                                        <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
                                        <span class="mess-item-name">Tim Collins</span>
                                        <span class="mess-item-txt">Morgan was bothering about something!</span>
                                    </a>
                                    <a href="#" class="mess-item">
                                        <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
                                        <span class="mess-item-name">Christian Burton</span>
                                        <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something.</span>
                                    </a>
                                    <a href="#" class="mess-item">
                                        <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
                                        <span class="mess-item-name">Tim Collins</span>
                                        <span class="mess-item-txt">Morgan was bothering about something!</span>
                                    </a>
                                    <a href="#" class="mess-item">
                                        <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
                                        <span class="mess-item-name">Christian Burton</span>
                                        <span class="mess-item-txt">Morgan was bothering about something...</span>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-outgoing" role="tabpanel">
                                <div class="dropdown-menu-messages-list">
                                    <a href="#" class="mess-item">
                                        <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
                                        <span class="mess-item-name">Christian Burton</span>
                                        <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something...</span>
                                    </a>
                                    <a href="#" class="mess-item">
                                        <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
                                        <span class="mess-item-name">Tim Collins</span>
                                        <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something.</span>
                                    </a>
                                    <a href="#" class="mess-item">
                                        <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
                                        <span class="mess-item-name">Christian Burtons</span>
                                        <span class="mess-item-txt">Morgan was bothering about something!</span>
                                    </a>
                                    <a href="#" class="mess-item">
                                        <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
                                        <span class="mess-item-name">Tim Collins</span>
                                        <span class="mess-item-txt">Morgan was bothering about something!</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-menu-notif-more">
                            <a href="#">See more</a>
                        </div>

                    </div>

                </div>

                <div class="dropdown dropdown-lang">

                    <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @icon(['type' => 'mini-flag', 'icon' => 'br'])
                    </button>

                    <div class="dropdown-menu dropdown-menu-right">

                        <div class="dropdown-menu-col">

                            <a class="dropdown-item {{ app()->getLocale() == 'pt-BR' ? 'current' : '' }}" href="#">
                                @icon(['type' => 'mini-flag', 'icon' => 'br'])
                                Português
                            </a>
                            <a class="dropdown-item {{ app()->getLocale() == 'fr' ? 'current' : '' }}" href="#">
                                @icon(['type' => 'mini-flag', 'icon' => 'fr'])
                                Français
                            </a>

                        </div>

                        <div class="dropdown-menu-col">

                            <a class="dropdown-item {{ app()->getLocale() == 'en' ? 'current' : '' }}" href="#">
                                @icon(['type' => 'mini-flag', 'icon' => 'us'])
                                English
                            </a>
                            <a class="dropdown-item {{ app()->getLocale() == 'es' ? 'current' : '' }}" href="#">
                                @icon(['type' => 'mini-flag', 'icon' => 'es'])
                                Español
                            </a>

                        </div>

                    </div>

                </div>

                --}}

                <div class="dropdown user-menu">

                    <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @img(['avatar' => 1, 'url' => Request::user()->meta->avatar ?? ''])
                    </button>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">

                        <a class="dropdown-item" href="{{ url('/profile') }}">
                            @icon(['icon' => 'user', 'class' => 'font-icon'])
                            <span class="lbl">@lang('Profile')</span>
                        </a>

                        <a class="dropdown-item" href="{{ url('/settings') }}">
                            @icon(['icon' => 'gear', 'class' => 'font-icon'])
                            <span class="lbl">@lang('Settings')</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{ url('/help') }}">
                            @icon(['icon' => 'question-circle', 'class' => 'font-icon'])
                            <span class="lbl">@lang('Help')</span>
                        </a>

                        <a class="dropdown-item" href="{{ url('/feedback') }}">
                            @icon(['icon' => 'info-circle', 'class' => 'font-icon'])
                            <span class="lbl">@lang('Feedback')</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                            @icon(['icon' => 'sign-out', 'class' => 'font-icon'])
                            <span class="lbl">@lang('Logout')</span>
                        </a>
                    
                    </div>

                    <form id="frm-logout" action="{{ url('/logout') }}" method="post">
                        @csrf
                    </form>

                </div>

            </div>

        </div>
    </div>

</div>