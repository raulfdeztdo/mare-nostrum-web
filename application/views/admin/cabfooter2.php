
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
          <a class="btn btn-primary" href="<?= base_url().'Auth/logout' ?>">Salir</a>
        </div>
      </div>
    </div>
  </div>


<script src="<?= asset_url('js/sb-admin-2.js') ?>"></script>

</body>

</html>
