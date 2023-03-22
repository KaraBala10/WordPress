<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <title>
      <?php wp_title(' ','true', 'right'); ?>
      <?php bloginfo('name'); ?>
   </title>
    <?php wp_head(); ?>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="<?php echo home_url(); ?>">My Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse mr-auto" id="navbarSupportedContent">
   <?php bootstrap_navigation_bar() ?>


  </div>
</nav>
