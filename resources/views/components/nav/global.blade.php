<nav id="nav-1" class="nav-menu">
    <div class="nav-row">
        <a href="#" class="sidebar-btn open-btn left">
            <i class="sidebar-icon fas fa-bars"></i>
        </a>
        
        <a href="/" class="nav-title logo">
            <img src="{{asset('img/resources/logo.png')}}" alt="Avcla logo">
            <h1>AvCla!</h1>
        </a>
        
        <a href="#" class="sidebar-btn open-btn right">
            <i class="sidebar-icon fas fa-filter"></i>
        </a>
    </div>

    <div class="nav-row">
        <ul class="menu-list">
            <li><a href="/" class="nav-link">
                Home
            </a></li>
            <li class="collapsable closed">
                <a href="/panel" class="nav-link">
                    Panel
                    <button class="collapsable-btn">
                        <i class="collapsable-icon fas fa-sort-down"></i>
                    </button>
                </a>
                <ul class="collapsable-menu">
                    <li class="m-0"><a href="/panel#users" class="collapsable-link"><i class="link-icon fas fa-chevron-right"></i>Users</a></li>
                    <li class="m-0"><a href="/panel#new-user" class="collapsable-link"><i class="link-icon fas fa-chevron-right"></i>New User</a></li>
                </ul>
            </li>
            <li><a href="/log-off" class="nav-link">
                Log off
            </a></li>
        </ul>
    </div>

    @component('components.nav.sidebar_left')
    @endcomponent
    @component('components.nav.sidebar_right')
    @endcomponent
</nav>