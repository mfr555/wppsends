@auth
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <div class="sidebar-brand">
                <i class="fa fa-home m-2" aria-hidden="true"></i>
            </div>
            <div class="sidebar-brand-text mx-3">WhatsApp Sends</div>
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

        @can('view', 'App\\Models\Lista')
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <i class="fas fa-fw fa-list"></i>
                <span>Listas</span>
            </a>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">

                    @can('view', 'App\\Models\Lista')
                        <a class="collapse-item" href="{{ route('listas') }}">Ver listado</a>
                    @endcan

                    @can('edit', 'App\\Models\Lista')
                        <a class="collapse-item" href="{{ route('listas.create') }}">Nueva</a>
                    @endcan

                </div>
            </div>
        </li>
        @endcan

        @can('view', 'App\\Models\User')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Usuarios</span></a>
            </li>
        @endcan

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
