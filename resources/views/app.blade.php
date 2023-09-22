@include('template.head')


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar sólo si está logueado -->
        @auth
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                    <div class="sidebar-brand">
                        <img src="img/logo/blanco.png" alt="Plan País logo" >
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
                    Contextos disponibles
                </div>

                <!-- Nav Item - Campañas Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Campañas</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Campañas habilitadas</h6>

                            <!-- Se cargan las campañas como links:
                                <a class="collapse-item" href="buttons.html">Jóvenes 2022</a>
                                <a class="collapse-item" href="cards.html">Internas 2024</a>
                            -->

                            <a class="collapse-item" href="cards.html">Internas 2024</a>
                            <a class="collapse-item" href="cards.html">Nacional 2024</a>
                        </div>

                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Campañas no habilitadas</h6>
                            <!-- Campañas pasadas -->
                            <a class="collapse-item" href="buttons.html">Jóvenes 2022</a>

                            <!-- Campañas futuras -->
                            <hr style="margin: 0;">
                            <a class="collapse-item" href="cards.html">Balotage 2024</a>

                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Paneles
                </div>

                <li class="nav-item">
                    <a class="nav-link" href="#gerencial">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Gerencial</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#panel-usuario">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Usuario</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#dirigenteSide" aria-expanded="true" aria-controls="dirigenteSide">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Dirigente</span>
                    </a>
                    <div id="dirigenteSide" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar" style="">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Listas</h6>
                            <a class="collapse-item" href="#lista123odd">123 Departamental</a>
                            <a class="collapse-item" href="#lista123odn">123 Nacional</a>
                            <a class="collapse-item" href="#lista50505000odn">50505000 Nacional</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#admin-usuarios">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Administracion de usuarios</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#admin">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Administrador del sistema</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#superusuario">
                        <i class="fas fa-fw fa-bolt"></i>
                        <span>Superusuario</span></a>
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


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            @auth

                <!-- Main Content -->
                <div id="content">

                    <!-- Mensajes -->
                    <section id="mensajes">
                        @include('layouts.partials.messages')
                    </section>

                    <!-- Topbar y template -->
                    @include('template.topbar')

                    <!-- Begin Page Content -->
                    <div class="container-fluid" id="contenedor-principal">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800 text-weight-bold">
                                Campaña: <span class="text-uppercase">Elecciones internas 2024</span>
                            </h1>
                            <a href="#" class="d-none d-sm-inline-block btn btn-success shadow-sm"><i
                                    class="fas fa-plus fa-sm text-white-50"></i>
                                Agregar persona
                            </a>
                        </div>

                        <!-- Paneles -->
                        @if (false)
                            @include('paneles.gerencial')
                        @endif
                        @include('paneles.usuario')
                        @include('paneles.dirigente')
                        @include('paneles.admin-users')
                        @include('paneles.admn-sys')
                        @include('paneles.super')

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

            @else
                @include('template.no-login-container')
            @endauth



            @include('template.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('template.footjs')
</body>

</html>
