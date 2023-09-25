@include('template.head')


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('template.side')

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

                        <!-- Paneles -->
                        @yield('content')

                        @if (false)
                            @include('paneles.add_contacto')
                            @include('paneles.comunicaciones')
                            @include('paneles.gerencial')
                            @include('paneles.usuario')
                            @include('paneles.dirigente')
                            @include('paneles.admin-users')
                            @include('paneles.admn-sys')
                            @include('paneles.super')
                        @endif

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
