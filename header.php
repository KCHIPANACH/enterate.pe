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
      <nav class="enterate__menu">
         <div>

            <h3>
               <span><i class="fas fa-question-circle"></i></span>&nbsp;
               Enterate.pe
            </h3>

         </div>
         <div class="enterate__menu--mid">
            <div class="enterate__menu--buscador">

               <span><i class="fas fa-search"></i></span>
               <input type="search" placeholder="Busca tu informacion">

            </div>
            <div class="enterate__menu--publicar">
               <button class="btn_publicar"> ¿ Deseas publicar algo?</button>
            </div>         
         </div>

         <div class="enterate__menu--assets">

            <div>
               <button class="menu__hidden__icono--button">
                  <i class="fas fa-bars"></i>
               </button>
            </div>
            <div>
               <input type="checkbox" id="switch-input" class="checkbox">
               <label for="switch-input" class="switch"><span><i class="fab fa-gratipay"></i></span></label>
            </div>

         </div>
      </nav>
   </header>

   <div class="contenedor_desea_publicar">
      <div class="content_deseapublicar fade-in-bottom">
         <div class="content_deseapublicar__pasouno">
            <h4 class="m_0">¿Qué deseas publicar?</h4>
            <div class="pasouno__enlaces">
               <button> Noticias </button>
               <button>Reportar #telefono</button>
            </div>
         </div>
         <div class="content_deseapublicar__pasodos">
            <h4 class="m_0">¿Cómo deseas publicar?</h4>
            <div class="pasodos__enlaces">
               <a href="#"><button id="btnAnonimo"> Anonimo </button></a>
               <a href="#"><button> Inicia Sesión </button></a>
            </div>
         </div>
      </div>
   </div>

    <div id="content" class="">
       <div class="menu__hidden">
          <div class="menu__hidden__title">
             <h3>CATEGORIAS</h3>
          </div>
         <div class="menu__hidden__content">
            <div class="menu__hidden__content--element">
               <div>
                  <span><i class="fab fa-codepen"></i></span>
                  <p>Dev JavaScript</p>
               </div>
            </div>
            <div class="menu__hidden__content--element">
               <div>
                  <span><i class="fab fa-codepen"></i></span>
                  <p>Dev JavaScript</p>
               </div>
            </div>
            <div class="menu__hidden__content--element">
               <div>
                  <span><i class="fab fa-codepen"></i></span>
                  <p>Dev JavaScript</p>
               </div>
            </div>
            <div class="menu__hidden__content--element">
               <div>
                  <span><i class="fab fa-codepen"></i></span>
                  <p>Dev JavaScript</p>
               </div>
            </div>
            <div class="menu__hidden__content--element">
               <div>
                  <span><i class="fab fa-codepen"></i></span>
                  <p>Dev JavaScript</p>
               </div>
            </div>
            <div class="menu__hidden__content--element">
               <div>
                  <span><i class="fab fa-codepen"></i></span>
                  <p>Dev JavaScript</p>
               </div>
            </div>
         </div>

      </div>

