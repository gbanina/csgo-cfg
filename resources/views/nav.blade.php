

    <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Primary Menu">
        <button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">Menu</button>
            <div class="primary-menu-wrapper">
                <ul id="primary-menu" class="primary-menu">
                    <li  class="menu-item {{ Request::is('home') ? 'current-menu-item' : '' }}"><a href="{{ URL::to('home') }}">Home</a></li>
                    <li class="menu-item {{ Request::is('prettify') ? 'current-menu-item' : '' }}"><a href="{{ URL::to('prettify') }}">config prettify</a></li>
                    <li class="menu-item {{ Request::is('contact') ? 'current-menu-item' : '' }}"><a href="{{ URL::to('contact') }}">Contact</a></li>
                @if (Auth::guest())
                    <li class="menu-item"><a href="{{ URL::to('/auth/register') }}">Register</a></li>
                    <li class="menu-item"><a href="{{ URL::to('/auth/login') }}">Login</a></li>
                @else
                    <li class="menu-item {{ Request::is('profile') ? 'current-menu-item' : '' }} menu-item-has-children"><a href="{{ URL::to('profile') }}">{{Auth::user()->name}}</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="{{ URL::to('profile') }}">My Profile</a></li>
                            <li class="menu-item"><a href="{{ URL::to('settings') }}">Settings</a></li>
                            <li class="menu-item"><a href="{{ URL::to('auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
                </ul>
</div> </nav><!-- #site-navigation -->
