@auth
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <div class="sidebar-brand">
                <img src="{{ asset('img/logo/blanco.png') }}" alt="Plan País logo" >
            </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Inicio -->
        <li class="nav-item active">
            <a class="nav-link" href="/">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Inicio</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading" id="configuraciones-side">
            Base de datos
        </div>

        <!-- Nav Item - Bases de datos -->
        <li class="nav-item">
            <a class="nav-link" href="/contactos">
                <i class="fas fa-fw fa-user"></i>
                <span>Administrar contactos</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/comunicaciones">
                <i class="fas fa-fw fa-phone"></i>
                <span>Campañas de Wpp</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->
        <!--div class="sidebar-card d-none d-lg-flex">
            <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
            <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
            <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
        </div-->

    </ul>
    <!-- End of Sidebar -->

@endauth
