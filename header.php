<!DOCTYPE html>
<html lang="es_PE">
<head>
   <?php wp_head(); ?>
   <!--  -->
   <title><?php wp_title(); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link rel="profile" href="https://gmpg.org/xfn/11" />
   <meta name="theme-color" content="#151515">
   <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css">
   <!--  -->
   <script>
      const URL_BASE = `<?= get_site_url()?>`
      const IP_CLIENT = `<?=  $_SERVER['REMOTE_ADDR'] ?>`
      const URL_DIRECTORY = `<?= get_template_directory_uri()  ?>`
   </script>
   <script src="https://kit.fontawesome.com/7ed4672151.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>

   <?php wp_body_open(); ?>

   <header id="header">

   </header>

    <div id="content" class="">