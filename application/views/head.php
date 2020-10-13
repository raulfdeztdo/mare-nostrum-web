<!DOCTYPE html>
<html>
  <head>

    <title><?php print $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="<?= asset_url('img/logo-solo.png') ?>" type="image/png">
    <!-- Archivos Bootstrap -->
    <link rel="stylesheet" href="<?= asset_url('css/bootstrap.min.css') ?>">
    <script src="<?= asset_url('js/jquery.min.js') ?>"></script>
    <script src="<?= asset_url('js/popper.min.js') ?>"></script>
    <script src="<?= asset_url('js/bootstrap.min.js') ?>"></script>
    <!-- Archivos propios -->
    <link rel="stylesheet" href="<?= asset_url('css/estilo.css') ?>">
    <script src="<?= asset_url('js/jquery-mn.js') ?>"></script>

  </head>
  <style>
    /* Fuentes importadas */
    @font-face {
      font-family: "Quicksand";
      src: url("<?= asset_url('fonts/Quicksand/Quicksand-Regular.ttf') ?>");
    }
    @font-face {
      font-family: "Nunito";
      src: url("<?= asset_url('fonts/Nunito/Nunito-Regular.ttf') ?>");
    }
    @font-face {
      font-family: "Raleway";
      src: url("<?= asset_url('fonts/Raleway/Raleway-Regular.ttf') ?>");
    }
  </style>
