<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="<?= asset_url('img/logo-solo.png') ?>" class="brand_logo" alt="Logo">
					</div>
				</div>
        <?= validation_errors('<div class="d-flex alert alert-danger" style="top: 80px">','</div>'); ?>
				<div class="d-flex justify-content-center form_container">
          <?= form_open(base_url().'Auth/login'); ?>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="usuario" class="form-control input_user" value="" placeholder="Usuario">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="contraseña" class="form-control input_pass" value="" placeholder="Contraseña">
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	     <button type="submit" name="button" class="btn login_btn">Enviar <i class="fas fa-sign-in-alt"></i> </button>
				      </div>
					<?= form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
