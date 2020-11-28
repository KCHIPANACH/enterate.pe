<?php 
    /*
    Template Name: Login With Anonimus User

    http://localhost/enterate/wp-admin/post-new.php
    CONTRASEÑA ANONIMO ENTERATE WP
    ySAUJ04sjZkZpddRgt%wbyo4
    Anonimo
    anonimo@anonimoenterate.pe
    */
    
    header("Acces-Control-Allow-Origin: *");

    $userAnonimo = 'anonimo@anonimoenterate.pe';
    $contraseñaAnonimo = 'ySAUJ04sjZkZpddRgt%wbyo4';

    $userdata = [
        'user_login' => $userAnonimo,
        'user_password'=> $contraseñaAnonimo
    ];

    $user_id = wp_signon($userdata);

    if(!empty($user_id)){
        $urlRedirectionNewPost = get_site_url().'/wp-admin/post-new.php';
        echo json_encode($urlRedirectionNewPost);
    }
?>