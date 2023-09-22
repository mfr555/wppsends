<section id="dirig">
    <h2 class="h2 mb-2" id="mi-lista">Panel de dirigente</h2>

    <div class="row" id="row-lista123odd">

        <div class="col-lg-12 mb-4">
            <!-- Collapsable Card -->
            <div class="card shadow">
                <!-- Card Header - Accordion -->
                <a href="#lista123odd" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="lista123odd">
                    <h6 class="m-0 font-weight-bold text-primary font-weight-bold">Lista 123 ODD</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="lista123odd">
                    <div class="card-body">

                        <!-- Cabezal de la sección mi lista de una lista -->
                        <div class="row">

                            <div class="col-xl-6 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    Objetivo: integración de la Lista Departamental 123
                                                </div>
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                    Llegar a 150 integranes al ODD: pendiente
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-target fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                    Integrantes de la lista
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">65</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress progress-sm mr-2">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: {{ 56*100/150 }}%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="150"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-users fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Fecha límite para integrar listas:
                                                    @php
                                                        $en5dias = mktime(0, 0, 0, date("m"), date("d")+5, date("Y"));
                                                        echo date('d/m/y', $en5dias);
                                                    @endphp

                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-danger">Faltan 5 días</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <a href="#" class="btn btn-secondary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Agregar un integrante de esta lista</span>
                                </a>
                            </div>
                        </div>

                        <hr>

                        <!-- Votación estimada de esta lista -->
                        <h4>Votación de la lista</h4>
                        <div class="row">

                            <div class="col-xl-9 col-md-12 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                    <h4 class="small font-weight-bold">Intención de voto actual: 35% <span class="float-right">Actual: 875. Objetivo 2500</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-12 mb-4">

                                <a href="#" class="btn btn-primary btn-icon-split btn-expanded">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Agregar votante</span>
                                </a>

                            </div>
                        </div>

                        <p>
                            <a target="_blank" rel="nofollow" href="$">
                                Ver integración de la lista →
                            </a>
                        </p>
                        <p>
                            <a target="_blank" rel="nofollow" href="$">
                                Ver votantes →
                            </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="row" id="row-lista123odn">

        <div class="col-lg-12 mb-4">
            <!-- Collapsable Card -->
            <div class="card shadow">
                <!-- Card Header - Accordion  +++++++++++++++++++++++  collapsed acá  +++++++++++++++++++++++++++++++++++++++++++++   false acá -->
                <a href="#lista123odn" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="lista123odn">
                    <h6 class="m-0 font-weight-bold text-primary font-weight-bold">Lista 123 ODN</h6>
                </a>
                <!-- Card Content - Collapse -->
                <!-- +++++++++++++++ show no va acá  -->
                <div class="collapse      " id="lista123odn">
                    <div class="card-body">

                        <!-- Cabezal de la sección mi lista de una lista -->
                        <div class="row">

                            <div class="col-xl-6 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    Objetivo: integración de la Lista Nacional 123
                                                </div>
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                    Llegar a 150 integranes al ODD: pendiente
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-target fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                    Integrantes de la lista
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">65</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress progress-sm mr-2">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: {{ 56*100/150 }}%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="150"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-users fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Fecha límite para integrar listas:
                                                    @php
                                                        $en5dias = mktime(0, 0, 0, date("m"), date("d")+5, date("Y"));
                                                        echo date('d/m/y', $en5dias);
                                                    @endphp

                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-danger">Faltan 5 días</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <a href="#" class="btn btn-secondary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Agregar un integrante de esta lista</span>
                                </a>
                            </div>
                        </div>

                        <hr>

                        <!-- Votación estimada de esta lista -->
                        <h4>Votación de la lista</h4>
                        <div class="row">

                            <div class="col-xl-9 col-md-12 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                    <h4 class="small font-weight-bold">Intención de voto actual: 95% <span class="float-right">Actual: 2230. Objetivo 2500</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-12 mb-4">

                                <a href="#" class="btn btn-primary btn-icon-split btn-expanded">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Agregar votante</span>
                                </a>

                            </div>
                        </div>

                        <p>
                            <a target="_blank" rel="nofollow" href="$">
                                Ver integración de la lista →
                            </a>
                        </p>
                        <p>
                            <a target="_blank" rel="nofollow" href="$">
                                Ver votantes →
                            </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="row" id="row-lista50505000odn">

        <div class="col-lg-12 mb-4">
            <!-- Collapsable Card -->
            <div class="card shadow">
                <!-- Card Header - Accordion  +++++++++++++++++++++++  collapsed acá  +++++++++++++++++++++++++++++++++++++++++++++   false acá -->
                <a href="#lista50505000odn" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="lista50505000odn">
                    <h6 class="m-0 font-weight-bold text-primary font-weight-bold">Lista 50505000 ODN</h6>
                </a>
                <!-- Card Content - Collapse -->
                <!-- +++++++++++++++ show no va acá  -->
                <div class="collapse      " id="lista50505000odn">
                    <div class="card-body">

                        <!-- Cabezal de la sección mi lista de una lista -->
                        <div class="row">

                            <div class="col-xl-6 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    Objetivo: integración de la Lista Nacional 50505000
                                                </div>
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Llegar a 150 integranes al ODN: logrado!
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-target fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                    Integrantes de la lista
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">176</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress progress-sm mr-2">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="176" aria-valuemin="0" aria-valuemax="176"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-users fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Fecha límite para integrar listas:
                                                    @php
                                                        $en5dias = mktime(0, 0, 0, date("m"), date("d")+5, date("Y"));
                                                        echo date('d/m/y', $en5dias);
                                                    @endphp

                                                </div>
                                                <div class="h5 mb-0 font-weight-bold">Faltan 5 días</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <a href="#" class="btn btn-secondary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Agregar un integrante de esta lista</span>
                                </a>
                            </div>
                        </div>

                        <hr>

                        <!-- Votación estimada de esta lista -->
                        <h4>Votación de la lista</h4>
                        <div class="row">

                            <div class="col-xl-9 col-md-12 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                    <h4 class="small font-weight-bold">Intención de voto actual: 65% <span class="float-right">Actual: 1622. Objetivo 2500</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-12 mb-4">

                                <a href="#" class="btn btn-primary btn-icon-split btn-expanded">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Agregar votante</span>
                                </a>

                            </div>
                        </div>

                        <p>
                            <a target="_blank" rel="nofollow" href="$">
                                Ver integración de la lista →
                            </a>
                        </p>
                        <p>
                            <a target="_blank" rel="nofollow" href="$">
                                Ver votantes →
                            </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>
