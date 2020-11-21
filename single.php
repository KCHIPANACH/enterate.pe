<?php 
  get_header();
  the_post();

  $colores = [
    '#db2c29',
    '#efb810',
    '#a9abb3',
];
$user = wp_get_current_user();
?>
<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/styles/single.css">

<div class="container">
    <div class="contenedorSingle">
        <div class="barra_sidebar_single"></div>
        <div class="contenedor_single">

            <div class="contenedor_single__img">
                <img  class="w_100_cover" src="<?= the_post_thumbnail_url() ?>" alt="">
            </div>

            <div class="contenedor_single__title">
                <h1 class="m_0"> <?= get_the_title() ?></h1>
                <div class="contenedor_single_title__tags">
                    <div class="tags_items" style="background:<?= $colores[array_rand($colores, 1)] ?>">
                        <span> #jeysonselacome </span>
                    </div>
                    <div class="tags_items" style="background:<?= $colores[array_rand($colores, 1)] ?>">
                        <span> #dobladayentera </span>
                    </div>
                    <div class="tags_items" style="background:<?= $colores[array_rand($colores, 1)] ?>">
                        <span> #javascript </span>
                    </div>
                    <div class="tags_items" style="background:<?= $colores[array_rand($colores, 1)] ?>">
                        <span> #webdev </span>
                    </div>
                </div>
                <div class="contenedor_single_title__meta">
                    <div class="author"> 
                        <div class="author__avatar">
                            <img class="w_100_cover" src="<?= get_avatar_url( $user->ID) ?>" alt="">
                        </div>
                        <span> por <?= get_the_author() ?> </span> </div>     
                    <div class="contenedor_fecha">
                    <span class="m_0 font-roboto"><?= get_the_date( 'M d, Y' ) ?></span>
                    </div>              
                </div>
            </div>

            <div class="contenedor_single__content">
                <?= the_content() ?>
            </div>

        </div>
        <div class="bara_sidebar_right">
        </div>
    </div>

</div>


<?php 
  get_footer();
?>