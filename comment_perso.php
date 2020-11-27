<?php
if( ! function_exists( 'comment_personalizado' ) ):
function comment_personalizado($comment, $args, $depth) {
    ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
<!--    <div class="icon_children">
     <i class="fa fa-reply"></i>
   </div> -->
    <div class="comment_contenedor">
        <div class="img-thumbnail d-none d-sm-block">
            <?php echo get_avatar($comment,$size='80',$default='http://0.gravatar.com/avatar/36c2a25e62935705c5565ec465c59a70?s=32&d=mm&r=g' ); ?>
        </div>
        <div class="comment-block">
            <div class="comment-arrow"></div>
                <?php if ($comment->comment_approved == '0') : ?>
                    <em><?php esc_html_e('Tu comentario está esperando ser moderado.','5balloons_theme') ?></em>
                    <br />
                <?php endif; ?>
                <div class="comment-by">
                    <strong class="t_h5 ft_bold c_pa"><?php echo get_comment_author() ?></strong>
                    <span class="responder">
                        <span> <a href="#"><i class="fa fa-reply"></i> <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></a></span>
                    </span>
                </div>
            <div class="ft_parrafo c_plomob t_p comentario_text"> <?php comment_text() ?></div>
            <span class="date ft_parrafo t_p c_pa"><?php echo "Publicado el ".get_comment_date('d\/m\/Y')/* printf(esc_html__('%1$s at %2$s' , '5balloons_theme'), get_comment_date(),  get_comment_time()) */ ?></span>
        </div>
        </div>

<?php
        }
endif;


