<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php echo $nombreSitio; ?></title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/materialize.css') ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url('assets/css/style.css') ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

 <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="<?= base_url();?>" class="brand-logo"><?php echo $titulo; ?></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?= base_url('index.php/watchdog');?>">Watchdog</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <!-- Inicio Tarjeta Nav -->
        <li><div class="userView">
          <img class="background responsive-img" src="http://www.combogamer.com/wp-content/uploads/2015/01/Ghost-in-the-Shell-Motoko-ComboGamer.jpg">
          <a href="#!user"><img class="circle responsive-img" src="https://static.betazeta.com/www.fayerwayer.com/up/2016/04/Motoko-Kusanagi1-960x623.jpg"></a>
          <a href="#!name"><span class="white-text name">Mit</span></a>
          <a href="#!email"><span class="white-text email">Kohisekai.com</span></a>
        </div></li>

        <!-- fin tarjeta Nav-->
        <li><a href="<?= base_url('index.php/watchdog');?>" class="waves-effect btn-large">WatchDog.</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
