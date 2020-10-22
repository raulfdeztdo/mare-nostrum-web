<!-- Comienzo Modificar reservas -->
<div class="container-fluid">
  <!-- Titulo -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Apartamentos</h1>
    <a href="<?= base_url().'Inicio/index'; ?>" class="d-none d-inline-block btn btn-info btn-icon-split shadow">
      <span class="icon text-white"><i class="fas fa-plus-square"></i></span>
      <span class="text">Nuevo apartamento</span>
    </a>
  </div>
  <div class="container">
    <table class="table table-stripped table-hover text-center bg-white shadow" id="tablaApartamentos" style="font-size: 14px">
      <thead class="text-white bg-secondary">
        <th>Id</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Precio tachado</th>
        <th>Habitaciones</th>
        <th>Habitaciones dobles</th>
        <th>Baños</th>
        <th>Oferta</th>
        <th></th>
      </thead>
      <tbody>
        <?php for ($i=0; $i < count($apart) ; $i++) { ?>
          <tr>
            <td><?= $apart[$i]->idap ?></td>
            <td><?= $apart[$i]->nombre ?></td>
            <td class="text-truncate" style="max-width:200px"><?= $apart[$i]->descripcion ?></td>
            <td><?= $apart[$i]->precio ?></td>
            <td><?= $apart[$i]->preciotachado ?></td>
            <td><?= $apart[$i]->habitaciones ?></td>
            <td><?= $apart[$i]->habitacionesdobles ?></td>
            <td><?= $apart[$i]->wc ?></td>
            <td><?= $apart[$i]->oferta ?></td>
            <td> <button type="button" name="button" class="btn btn-info" data-toggle="modal" data-target="#modalApart<?= $apart[$i]->idap ?>"><i class="fas fa-edit"></i></button></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <?php for ($s=0; $s < count($apart) ; $s++) { ?>
    <div class="modal fade bd-example-modal-xl" id="modalApart<?= $apart[$s]->idap ?>">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header text-white bg-marenostrum">
            <h5 class="modal-title">Modificar apartamento</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="input-group mb-3 sizeInput" style="width: 25rem">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-secondary">Id apartamento</span>
                    </div>
                    <input type="text" class="form-control mr-sm-2" name="idap" id="idap" value="<?= $apart[$s]->idap ?>" readonly>
                  </div>
                  <div class="input-group mb-3 sizeInput" style="width: 25rem">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-secondary">Nombre</span>
                    </div>
                    <input type="text" class="form-control mr-sm-2" name="idap" id="idap" value="<?= $apart[$s]->nombre ?>">
                  </div>
                  <div class="input-group mb-3 sizeInput" style="width: 24.5rem">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-secondary">Precio</span>
                    </div>
                    <input type="number" class="form-control" name="precio" id="precio" value="<?= $apart[$s]->precio ?>">
                    <div class="input-group-append">
                      <span class="input-group-text bg-secondary" style="border-radius:0 0.35rem 0.35rem 0 !important">€ / noche</span>
                    </div>
                  </div>
                  <div class="input-group mb-3 sizeInput" style="width: 24.5rem">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-secondary">Precio tachado</span>
                    </div>
                    <input type="number" class="form-control" name="preciotachado" id="preciotachado" value="<?= $apart[$s]->preciotachado ?>">
                    <div class="input-group-append">
                      <span class="input-group-text bg-secondary" style="border-radius:0 0.35rem 0.35rem 0 !important">€ / noche</span>
                    </div>
                  </div>
                  <div class="input-group mb-3 sizeInput" style="width: 25rem">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-secondary">Habitaciones</span>
                    </div>
                    <input type="number" class="form-control mr-sm-2" name="habitaciones" id="habitaciones" value="<?= $apart[$s]->habitaciones ?>">
                  </div>
                  <div class="input-group mb-3 sizeInput" style="width: 25rem">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-secondary">Habitaciones dobles</span>
                    </div>
                    <input type="number" class="form-control mr-sm-2" name="habitacionesdobles" id="habitacionesdobles" value="<?= $apart[$s]->habitacionesdobles ?>" >
                  </div>
                  <div class="input-group sizeInput" style="width: 25rem">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-secondary">Descripción</span>
                    </div>
                    <textarea class="form-control" name="descripcion" id="descripcion" rows="5" aria-label="With textarea"><?= $apart[$s]->descripcion ?></textarea>
                  </div>
                </div>
                <div class="col-md-6">

                </div>
              </div>
              <div class="row">
            <div class="col-lg-8 col-sm-12 col-11 main-section">
                <h1 class="text-center text-danger">File Input Example</h1><br>
                <form enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="file-loading">
                            <input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
                        </div>
                    </div>
                </form>
            </div>
        </div>
            </div>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" name="guardar" class="btn btn-success float-left"><i class="fas fa-save"></i></button>
            <button type="button" name="eliminar" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>

        </div>
      </div>
    </div>
  <?php } ?>

  <script type="text/javascript">
    $("#file-1").fileinput({
      theme: 'fa',
      uploadUrl: '#',
      allowedFileExtensions: ['jpg', 'png', 'gif'],
      overwriteInitial: false,
      maxFileSize:2000,
      maxFilesNum: 10,
      slugCallback: function (filename) {
          return filename.replace('(', '_').replace(']', '_');
      }
    });
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
  <script src="<?= asset_url('js/jquery.min.js') ?>"></script>
  <script src="<?= asset_url('js/popper.min.js') ?>"></script>
  <script src="<?= asset_url('js/bootstrap.min.js') ?>"></script>

</div>
