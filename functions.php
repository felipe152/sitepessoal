<?php 

define('URLTEME', get_stylesheet_directory_uri());
add_action('init', 'start_session', 1);
add_action('wp_logout', 'end_session');
add_action('wp_login', 'end_session');
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_post_type_support( 'page', 'excerpt' );
function start_session() {
  if(!session_id()) {
    session_start();
  }
}

/* Tamanho de imagens */
add_image_size( 'post-thumb', 500,  500, array('center','center'));
add_image_size( 'post-principal', 354,  185, array('center','center'));
add_image_size( 'card', 413,  310, array('center','center'));

//Helpers
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

/*Paginação*/
function wordpress_pagination() {
  global $wp_query;
  $big = 999999999;
  
  $pages = paginate_links( array(
     'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
     'format' => '?paged=%#%',
     'current' => max( 1, get_query_var('paged') ),
     'total' => $wp_query->max_num_pages,
     'type' => 'array',
     'prev_text'    => '<i class="material-icons">chevron_left</i>',
     'next_text'    => '<i class="material-icons">chevron_right</i>',
  ));
  if( is_array( $pages ) ) {
    $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
    echo '<div class="pagination-wrap"><ul class="pagination">';
    foreach ( $pages as $page ) {
      if (strpos($page, 'current') !== FALSE) {
        echo '<li class="active"><a href="#!">'.$page.'</a></li>';
      } else{
        echo '<li class="waves-effect">'.$page.'</li>';
      }
      
    }
    echo '</ul></div>';
  }
  
  
}

function my_init(){ 
  if (!is_admin()){
    $versao = rand(0,1000);
  	$uri = get_stylesheet_directory_uri(); 
    $url = 'http://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'REQUEST_URI' ];
    $current_post_id = url_to_postid( $url );

    //AOS
    wp_register_style('aos-css','https://unpkg.com/aos@2.3.1/dist/aos.css',array('materialize-css'),$versao);
    wp_enqueue_style('aos-css');
    wp_register_script('aos-js','https://unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), '1.11.0', TRUE);
    wp_enqueue_script('aos-js');
    

    wp_deregister_script('jquery');
    wp_register_script('jquery', '/wp-includes/js/jquery/jquery.js', FALSE, '1.11.0', FALSE);
    wp_enqueue_script('jquery');
    
    wp_register_script('materialize-js',$uri.'/assets/js/materialize.min.js', array('jquery'), '1.11.0', TRUE);
    wp_enqueue_script('materialize-js');

    wp_register_script('script-js',$uri.'/assets/js/script.js', array('materialize-js'), $versao, TRUE);
    wp_enqueue_script('script-js');

    wp_register_style('materialize-css',$uri.'/assets/css/materialize.min.css');
    wp_enqueue_style('materialize-css');

    wp_register_style('base-css',$uri.'/style.css',array('materialize-css'),$versao);
    wp_enqueue_style('base-css');
  }
}
add_action( 'init', 'my_init' );


/* Newsletter */
add_action('wp_ajax_inscreve_newsletter', 'inscreve_newsletter');
add_action('wp_ajax_nopriv_inscreve_newsletter', 'inscreve_newsletter');


function cardsPageChild($att){
  $paginas = get_pages(array('child_of' => $att['page'] ));
  $cards = array();
  $cards['setup'] = array(
    'cardAtt' => 'data-aos="fade-up"', 
  );
  if ($paginas!==FALSE) {
    foreach ($paginas as $page) {
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'card' );
      $cards['dados'][] = array(
        'urlImage' => $image[0],
        'titulo' => $page->post_title,
        'url' => get_page_link( $page->ID ),
        'conteudo' => $page->post_excerpt,
      );
    }
    include(locate_template('template-part/cards.php'));
  }
}
add_shortcode('pagina_filho', 'cardsPageChild'); 

?>