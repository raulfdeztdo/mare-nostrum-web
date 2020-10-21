<body id="page-top">

  <!-- Pagina Wrapper principal -->
  <div id="wrapper">

    <!-- Sidebar lateral -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url().'Admin/index'; ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <img src="<?= asset_url('img/logo-solo.png') ?>" height="50px">
        </div>
        <div class="sidebar-brand-text mx-3">Mare Nostrum</div>
      </a>
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url().'Admin/index'; ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Item mensajes -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <?php if (isset($NoLeidos)) { ?>
                  <span class="badge badge-danger badge-counter"><?php print count($NoLeidos) ?></span>
                <?php } ?>
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Mensajes
                </h6>
                <?php if (isset($NoLeidos)) { ?>
                  <?php for ($s=0; $s < count($NoLeidos) ; $s++) { ?>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                      </div>
                      <div class="font-weight-bold">
                        <div class="text-truncate"><?php print $NoLeidos[$s]->msg; ?></div>
                        <div class="small text-gray-500"><?php print $NoLeidos[$s]->nombrecli. " ".$NoLeidos[$s]->apellidos; ?>· 58m</div>
                      </div>
                    </a>
                  <?php } ?>
                <?php } else { ?>
                  <div class="font-weight-bold">
                    <div class="text-truncate text-center pt-2 pb-2">No hay mensajes nuevos</div>
                  </div>
                <?php } ?>
                <a class="dropdown-item text-center small text-gray-500" href="#">Ver todos los mensajes</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php echo $_SESSION['logged_in']['nombre'] ?> </span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Ajustes
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Salir
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- Fin Topbar -->

        <!-- Comienzo contenido página -->
        <div class="container-fluid">

          <!-- Cabecera Administracion -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="<?php echo base_url().'Inicio/index'; ?>" class="d-none d-inline-block btn btn-primary shadow"><i class="fas fa-globe"></i> Ir a la web </a>
          </div>

          <!-- Fila de cards reservas y mensajes -->
          <div class="row">
            <!-- Card Reservas pendientes -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-marenostrum text-uppercase mb-1">Reservas pendientes</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card Reservas terminadas -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Reservas terminadas</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card Mensajes pendientes -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Mensajes pendientes</div>
                      <?php if (isset($NoLeidos)) { ?>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php print count($NoLeidos) ?></div>
                      <?php } else { ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                    <?php } ?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Fila de listas de apartamentos y reservas -->
          <div class="row">
            <!-- Lista reservas -->
            <div class="col-xl-6 col-lg-6">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-marenostrum">Últimas reservas</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Reservas</div>
                      <a class="dropdown-item" href="#">Crear reserva nueva</a>
                      <a class="dropdown-item" href="#">Detalles</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table table-sm table-hover text-center table-bordered" style="font-size: 14px">
                    <thead class="bg-marenostrum text-white">
                      <th>id</th>
                      <th>Nombre cliente</th>
                      <th>Fecha inicio</th>
                      <th>Fecha fin</th>
                      <th>Estado</th>
                    </thead>
                    <tbody>
                      <?php if (isset($reservas)) { ?>
                        <?php for ($z=0; $z < count($reservas); $z++) { ?>
                            <tr>
                              <td><?php echo $reservas[$z]->idres; ?></td>
                              <td><?php echo $reservas[$z]->nombrecli; ?></td>
                              <td><?php echo $reservas[$z]->fechaini; ?></td>
                              <td><?php echo $reservas[$z]->fechafin; ?></td>
                              <?php if ($reservas[$z]->estado == "Completada") { ?>
                                <td>
                                  <div class="progress" style="height:20px">
                                    <div class="progress-bar bg-success" style="width:100%;height:20px"><?php echo $reservas[$z]->estado; ?></div>
                                  </div>
                                </td>
                              <?php } elseif($reservas[$z]->estado == "En curso") { ?>
                                <td>
                                  <div class="progress" style="height:20px">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" style="width:100%;height:20px"><?php echo $reservas[$z]->estado; ?></div>
                                  </div>
                                </td>
                              <?php } elseif($reservas[$z]->estado == "Pendiente") { ?>
                                <td>
                                  <div class="progress" style="height:20px">
                                    <div class="progress-bar bg-danger" style="width:100%;height:20px"><?php echo $reservas[$z]->estado; ?></div>
                                  </div>
                                </td>
                              <?php } ?>
                            </tr>
                        <?php } ?>
                      <?php } else { ?>
                        <tr>
                          <td colspan="5">No hay últimas reservas</td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer">
                  <center><a href="#"><button type="button" name="button" class="btn btn-info">Ver todas</button></a></center>
                </div>
              </div>
            </div>
            <!-- Lista de apartamentos -->
            <div class="col-xl-6 col-lg-6">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-marenostrum">Últimos apartamentos</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Apartamentos</div>
                      <a class="dropdown-item" href="#">Crear nuevo apartamento</a>
                      <a class="dropdown-item" href="#">Detalles</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table table-sm table-hover text-center table-bordered" style="font-size: 14px">
                    <thead class="bg-marenostrum text-white">
                      <th>id</th>
                      <th>Nombre</th>
                      <th>Precio</th>
                      <th>Habitaciones</th>
                      <th>Habitaciones dobles</th>
                    </thead>
                    <tbody>
                      <?php if (isset($apartamentos)) { ?>
                        <?php for ($i=0; $i < count($apartamentos) ; $i++) { ?>
                            <tr style="border-radius: 8px !important">
                              <td><?php echo $apartamentos[$i]->idap; ?></td>
                              <td><?php echo $apartamentos[$i]->nombre; ?></td>
                              <td><?php echo $apartamentos[$i]->precio; ?></td>
                              <td><?php echo $apartamentos[$i]->habitaciones; ?></td>
                              <td><?php echo $apartamentos[$i]->habitacionesdobles; ?></td>
                            </tr>
                        <?php } ?>
                      <?php } else { ?>
                        <tr>
                          <td colspan="5">No hay apartamentos añadidos</td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer">
                  <center><a href="#"><button type="button" name="button" class="btn btn-info">Ver todas</button></a></center>
                </div>
              </div>
            </div>
          </div>

          <!-- Fila de configuración -->
          <div class="row">

            <!-- Columna card configuración -->
            <div class="col-lg-6 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-marenostrum">Configuración</h6>
                </div>
                <div class="card-body">
                  <table class="table table-sm table-borderless" style="font-size: 14px">
                    <thead>
                      <th>Base de datos</th>
                      <?php if (isset($dbDatos)) { ?>
                        <th>
                          <div class="progress" style="width: 70%; height:25px">
                            <div class="progress-bar bg-success" style="width:100%;height:25px">Conexión establecida</div>
                          </div>
                        </th>
                      <?php } else { ?>
                        <th>
                          <div class="progress" style="width: 70%; height:25px">
                            <div class="progress-bar bg-danger" style="width:100%;height:25px">Conexión rechazada</div>
                          </div>
                      </th>
                      <?php } ?>
                    </thead>
                    <tbody>
                      <?php if (isset($dbDatos)) { ?>
                      <tr>
                        <td>Host</td>
                        <td><?php print $dbDatos->hostname; ?></td>
                      </tr>
                      <tr>
                        <td>Username</td>
                        <td><?php print $dbDatos->username; ?></td>
                      </tr>
                      <tr>
                        <td>Nombre BD</td>
                        <td><?php print $dbDatos->database; ?></td>
                      </tr>
                      <tr>
                        <td>Tipo servidor</td>
                        <td><?php print $dbDatos->dbdriver; ?></td>
                      </tr>
                      <tr>
                        <td>Conjunto de caracteres</td>
                        <td><?php print $dbDatos->char_set; ?></td>
                      </tr>
                    <?php } else { ?>
                      <tr>
                        <td colspan="2" class="text-center">No hay conexión con la base de datos</td>
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>

            <div class="col-lg-6 mb-4">

              <!-- Cambios de diseño en WEB - v2 -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-marenostrum">Diseño</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <p>Próximamente</p>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- Fin Container-fluid -->

      </div>
      <!-- Fin Contenido Pagina -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Mare Nostrum SL - Administración - 2020</span>
          </div>
        </div>
      </footer>
      <!-- Fin Footer -->

    </div>
    <!-- Fin del Content Wrapper -->

  </div>
  <!-- Fin  of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Estas seguro que deseas salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body"><h5>Selecciona "Salir" para terminar la sesión</h5></div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="<?php echo base_url().'Auth/logout' ?>">Salir</a>
        </div>
      </div>
    </div>
  </div>


<script src="<?= asset_url('js/sb-admin-2.js') ?>"></script>

</body>

</html>
