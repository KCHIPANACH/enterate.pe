<?php 
add_theme_support( 'post-thumbnails' );
require get_template_directory() . '/comment_perso.php';



function my_custom_fonts() {
	$user_id = get_current_user_id();
	$user_info = get_userdata( $user_id );
	$user_data = $user_info->data;
	if($user_data->user_login !== 'admin' && $user_data->user_login !== 'webmaster'){
        echo '
        <style>
        #menu-dashboard{
            display:none;
        }
        
        #toplevel_page_movedo{
            display:none;
        }
        
        #menu-posts{
            display:none;
        }
        
        #menu-posts-portfolio{
            display:none
        }
        
        #menu-posts-testimonial{
            display:none;
        }
        
        #menu-posts-area-item{
            display:none;
        }
        
        #menu-media{
            display:none;
        }
        
        #menu-pages{
            display:none;
        }
        
        #menu-comments{
            display:none;
        }
        
        #menu-appearance{
            display:none;
        }
        
        #menu-plugins{
            display:none;
        }
        
        #toplevel_page_modal_survey{
            display:none;
        }
        
        #menu-users{
            display:none;
        }
        
        #menu-tools{
            display:none;
        }
        
        #toplevel_page_vc-general{
            display:none;
        }
        
        #menu-settings{
            display:none;
        }
        
        #toplevel_page_admin-import-movedo-demo-importer{
            display:none;
        }
        
        #toplevel_page_envato-market{
            display:none;
        }
    </style>';
    $urlPath = $_SERVER['REQUEST_URI'];
        if(!strpos($urlPath, 'post-new')){
            $urlPostNew = get_site_url().'/wp-admin/post-new.php';
            ?>
            <script>
                let URL_ADMIN = '<?= get_site_url() ?>/wp-admin/post-new.php';
                location.href= URL_ADMIN;
            </script>
            <?php
        }
	}
	
}

add_action('admin_head', 'my_custom_fonts');