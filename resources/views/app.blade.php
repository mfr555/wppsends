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

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800 text-weight-bold">
                                Base de datos
                            </h1>
                            <!--a href="#" class="d-none d-sm-inline-block btn btn-success shadow-sm"><i
                                    class="fas fa-plus fa-sm text-white-50"></i>
                                Agregar persona
                            </a-->
                        </div>

                        <!-- Paneles -->
                        @include('paneles.contactar')
                        @include('paneles.add_contacto')
                        @include('paneles.comunicaciones')

                        @if (false)
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
