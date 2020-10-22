<!DOCTYPE html>
<html>
  <head>
    <title><?php print $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="<?= asset_url('img/logo-solo.png') ?>" type="image/png">
    <!-- Archivos Bootstrap -->
    <script src="<?= asset_url('js/jquery.min.js') ?>"></script>
    <script src="<?= asset_url('js/popper.min.js') ?>"></script>
    <script src="<?= asset_url('js/bootstrap.min.js') ?>"></script>
    <script src="<?= asset_url('js/bootstrap.bundle.min.js') ?>"></script>
    <link rel="stylesheet" href="<?= asset_url('css/bootstrap.min.css') ?>">
    <!-- Archivos propios -->
    <link rel="stylesheet" href="<?= asset_url('css/estilo-Admin.css') ?>">
    <link rel="stylesheet" href="<?= asset_url('css/sb-admin-2.css') ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>

    <!-- FA icons -->
    <link rel="stylesheet" href="<?= asset_url('fa-icons\css\all.min.css') ?>">
    <link rel="stylesheet" href="<?= asset_url('fa-icons\css\brands.css') ?>">
    <script src="<?= asset_url('fa-icons\js\all.js') ?>"></script>
    <script src="<?= asset_url('fa-icons\js\brands.js') ?>"></script>
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
