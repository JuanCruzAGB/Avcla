<div class="sidebar left closed push-body">
    <div class="sidebar-header">
        <div class="sidebar-title logo">
            <img src="{{asset('img/resources/logo.png')}}" alt="Avcla logo">
            <h2>AvCla!</h2>
        </div>
        <a href="#" class="sidebar-btn close-btn left">
            <i class="sidebar-icon fas fa-times"></i>
        </a>
    </div>

    <div class="sidebar-content">
        <ul class="sidebar-menu">
            <li><a href="/" class="nav-link">
                Inicio
            </a></li>
            <li class="collapsable closed">
                <a href="/panel" class="nav-link">
                    Panel
                    <button class="collapsable-btn">
                        <i class="collapsable-icon fas fa-sort-down"></i>
                    </button>
                </a>
                <ul class="collapsable-menu">
                    <li class="m-0">
                        <a href="/panel#users" class="collapsable-link">
                            <i class="link-icon left fas fa-chevron-right"></i>
                            <span class="link-text">Users</span>
                        </a>
                    </li>
                    <li class="m-0">
                        <a href="/panel#new-user" class="collapsable-link">
                            <i class="link-icon left fas fa-chevron-right"></i>
                            <span class="link-text">New User</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href="/salir" class="nav-link">
                <i class="link-icon left fas fa-sign-out-alt"></i>
                <span class="link-text">Cerrar Sesión</span>
            </a></li>
        </ul>
    </div>
</div>