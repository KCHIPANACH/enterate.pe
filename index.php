<?php 
  get_header();
?>
<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/styles/home.css">


<section>
  <div class="container">
    <div class="contenedorGrillas">
        <?php 
            $args = [
              'post_type' => 'post',
              'posts_per_page' => -1,
              'post_status' => ['publish'],
            ];
            $query = new WP_Query($args);
            if($query->have_posts()):
              while($query->have_posts()): $query->the_post();$query->the_field();
                $excerpt = get_the_excerpt(); 
                $excerpt = substr( $excerpt, 0, 200 );
                $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
            ?>  
              <div class="contenedorGrillas__item">
                <div class="icon_love_card" data-id="<?= get_the_ID() ?>">
                  <i class="fab fa-gratipay"></i>
                </div>
                <a href="<?= the_permalink() ?>">
                  <div class="contenedorGrillas__item-title">
                    <h4 class="m_0"> <?= get_the_title() ?></h4>
                  </div>
                  <div class="contenedorGrillas__item-fecha">
                    <h5 class="m_0"> <?= get_the_date( 'M d, Y' ) ?> </h5>
                  </div>
                  <div class="contenedorGrillas__item-img">
                    <img
                        class="w_100_cover"
                        src="<?= get_the_post_thumbnail() ?>" 
                        alt="Imagen Loop">
                  </div>
                </a>
                <div class="contenedorGrillas__item-icons">
                  <div class="contenedorGrillas__item-icons__item iconshare">
                    <i class="fas fa-share-alt"></i>
                  </div>
                  <div class="contenedorGrillas__item-icons__item">
                    <i class="fas fa-comment"></i>
                    <span class="cant_comment"> 12 </span>
                  </div>
                </div>
              </div>
            <?php 
              endwhile;
              endif;
            ?>           
    </div>
  </div>
</section>



<?php 
  get_footer();
?>