
<!-- Comienzo contenido página -->
<div class="container-fluid">

  <!-- Cabecera Administracion -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="<?php echo base_url().'Inicio/index'; ?>" class="d-none d-inline-block btn btn-success btn-icon-split shadow">
      <span class="icon text-white"><i class="fas fa-globe"></i></span>
      <span class="text">Ir a la web</span>
    </a>
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
              <i class="fas fa-calendar-check fa-2x text-gray-300"></i>
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
                <td>Versión Base de datos</td>
                <td><?php print $configDatos['BDversion']->versionSQL; ?></td>
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
          <br>
          <table class="table table-sm table-borderless" style="font-size: 14px">
            <thead>
              <th>Sitio web</th>
            </thead>
            <tbody>
              <tr>
                <td>URL</td>
                <td><?php print $configDatos['url'] ?></td>
              </tr>
              <tr>
                <td>Controlador por defecto</td>
                <td><?php print $configDatos['default_controller'];  ?></td>
              </tr>
              <tr>
                <td>Versión CodeIginiter</td>
                <td><?php print $configDatos['ci_version']; ?></td>
              </tr>
              <tr>
                <td>Versión PHP</td>
                <td><?php print phpversion(); ?></td>
              </tr>
              <tr>
                <td>Log in</td>
                <td><?php print $configDatos['user'] ?></td>
              </tr>
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
