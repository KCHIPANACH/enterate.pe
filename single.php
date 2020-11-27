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
        <div class="barra_sidebar_single">
            <div class="barra_sidebar_single__content">
                <div class="barra_sidebar__item">
                    <i class="fab fa-gratipay"></i>
                </div>
                <div class="barra_sidebar__item" id="shareIcon">
                    <i class="fas fa-ellipsis-h"></i>
                </div>
                <div class="contenedor_share" id="shareContent">
                    <div class="contenedor_share__item-url">
                        <input type="text" value="<?= the_permalink() ?>">
                        <div class="icon_copy">
                            <i class="fas fa-copy"></i>
                        </div>
                    </div>
                    <div class="contenedor_share__item">
                        <h5 class="m_0"> Compartir en Twitter</h5>
                    </div>
                    <div class="contenedor_share__item">
                        <h5 class="m_0"> Compartir en Facebook</h5>
                    </div>
                    <div class="contenedor_share__item">
                        <h5 class="m_0"> Compartir en WhatsApp</h5>
                    </div>
                </div>                
            </div>
        </div>
        <div class="contenedor_single">

            <div class="contenedor_single__img">
                <img  class="w_100_cover" src="<?= the_post_thumbnail_url() ?>" alt="Imagene Destacada">
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
            
            <div class="contenedor_single__comentarios">
            <div class="titulocomentarios">
                <h4 class="m_0 c_dorado">Comentarios</h4>
            </div>
            <?php comments_template('/comments.php'); ?>
            </div>

        </div>
        <div class="bara_sidebar_right">
            <div class="ultimos_content">
                <div class="ultimos_content__title">
                    <h4 class="m_0"> <span class="c_dorado f_bold">Últimas</span> noticias vistas</h4>
                </div>
                <div class="utltimos_list">
                    <?php  foreach([1,2,3] as $value): ?>
                    <div class="ultimos_list__item">
                        <div class="ultimos_list__item-title">
                            <h5 class="m_0"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad </h5>
                        </div>
                        <div class="ultimos_list__item-tags">
                            <span>#jeyson</span><span>#selacome</span><span>#doblada</span>
                        </div>
                    </div>
                    <?php  endforeach; ?>
                </div>
            </div>
        </div>
    </div>

</div>


<script src="<?= get_template_directory_uri() ?>/js/single.js"></script>
<?php 
  get_footer();
?>