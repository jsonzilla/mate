<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta http-equiv="Content-Type"
  content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport"
  content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
<!-- HIRO -->
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Arquivo do Blog <?php } ?> <?php wp_title(); ?></title>
<meta http-equiv="Content-Language" content="pt-BR" />
<!-- your language -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">
<!-- materialize -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link
  href="<?php bloginfo('template_directory'); ?>/css/materialize.css"
  type="text/css" rel="stylesheet" media="screen,projection" />
<link href="<?php bloginfo('template_directory'); ?>/css/style.css"
  type="text/css" rel="stylesheet" media="screen,projection" />
<link rel="alternate" type="application/rss+xml"
  title="<?php bloginfo('name'); ?> RSS Feed"
  href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon"
  href="<?php bloginfo('template_directory'); ?>/images/favicon.png" />
<?php wp_head(); ?>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php echo get_option('home'); ?>"
        class="brand-logo"><?php 
        if ( function_exists( 'mate_custom_logo' ) ) { the_custom_logo(); } ?></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
         <?php wp_list_pages('title_li=&depth=0'); ?> 
      </ul>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
         <?php wp_list_pages('title_li=&depth=0'); ?> 
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i
        class="material-icons">menu</i></a>
    </div>
  </nav>
  <!-- HIRO new above here -->
  <!-- dont keek this DIV -->
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br> <br>
        <h1 class="header center teal-text text-lighten-2">
          <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
        </h1>
        <div class="row center">
          <h5 class="header col s12 light"><?php bloginfo('description'); ?></h5>
        </div>
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html"
            id="download-button"
            class="btn-large waves-effect waves-light teal lighten-1">Get
            Started</a>
        </div>
        <br> <br>
      </div>
    </div>
    <div class="parallax">
      <img src="http://praiasfloripa.com.br/mate/wp-content/uploads/2017/04/background1.jpg" alt="Unsplashed background img 1">
    </div>
  </div>