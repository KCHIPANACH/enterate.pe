<?php 
/*
Template Name: getFavoritesPosts 
*/

header("Acces-Control-Allow-Origin: *");
header('Content-Type: application/json');

$idPosts = json_decode(stripslashes(html_entity_decode($_POST["id_post"])));

$args = [
    'post_type' => 'post',
    'posts_per_page' => -1,
    'post_status' => ['publish'],
    'post__in' => $idPosts->like
  ];
  $respuesta= [];
  $query = new WP_Query($args);
  if($query->have_posts()):
    while($query->have_posts()): $query->the_post();$query->the_field();
        array_push($respuesta, [
            "id"=>get_the_ID(),
            "titulo" => get_the_title(),
            "url" => get_the_permalink(),
            "date"=>get_the_date( 'M d, Y' ),
            "imagen" => get_the_post_thumbnail()
        ]);

    endwhile;
  endif;

  echo json_encode($respuesta);
?>