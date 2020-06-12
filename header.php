<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--FAVICON-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo URLTEME; ?>/assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo URLTEME; ?>/assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo URLTEME; ?>/assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo URLTEME; ?>/assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo URLTEME; ?>/assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo URLTEME; ?>/assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo URLTEME; ?>/assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo URLTEME; ?>/assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo URLTEME; ?>/assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo URLTEME; ?>/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo URLTEME; ?>/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo URLTEME; ?>/assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo URLTEME; ?>/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo URLTEME; ?>/assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo URLTEME; ?>/assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <ul id="slide-out" class="sidenav">
      <li>
        <div class="user-view row">
          <div class="background">
            <img src="http://felipepeixoto.tecnologia.ws/wp-content/uploads/2020/05/back2.png">
          </div>
          <div class="col offset-s3 s6">
            <a href="#user"><img class="circle" src="http://felipepeixoto.tecnologia.ws/wp-content/uploads/2020/05/IMG_20190504_153649545.jpg"></a>
          </div>
          <div class="col s12">
            <a href="#name"><span class="white-text name">Felipe Peixoto</span></a>
            <a href="#email"><span class="white-text email">peixoto152@gmail.com</span></a>
          </div>  
        </div>           
      </li>
      <li><a href="<?php echo get_home_url(); ?>"><i class="material-icons">home</i>Home</a></li>
      <li><a href="http://felipepeixoto.tecnologia.ws/blog/"><i class="material-icons">rss_feed</i>Blog</a></li>
      <li><a href="http://felipepeixoto.tecnologia.ws/projetos/"><i class="material-icons">code</i>Projetos</a></li>
      <li><a href="http://felipepeixoto.tecnologia.ws/sobre-mim/"><i class="material-icons">face</i>Sobre</a></li>
      <li><a href="http://felipepeixoto.tecnologia.ws/contato/"><i class="material-icons">alternate_email</i>Contato</a></li>
      <li><div class="divider"></div></li>
      <li class="submenu">
        <div class="row">
          <div class="col offset-m1 m3 center-align"><a href="https://www.facebook.com/felipe152" target="_blank" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></div>
          <div class="col m3 center-align"><a href="https://www.linkedin.com/in/felipe-peixoto-56901b22/" target="_blank" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a></div>
          <div class="col m3 center-align"><a href="https://twitter.com/felipe152" target="_blank" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></div>
        </div>
      </li>
    </ul>
    <a href="#" data-target="slide-out" data-position="right" data-tooltip="Abra o menu" class="sidenav-trigger tooltipped"><i class="material-icons">menu</i></a>