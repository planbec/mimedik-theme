<?php 

add_theme_support('post-thumbnails' );


/* Hoja de estilos */
function ag_style() {
	wp_register_style(
		'custom-font',
		'https://fonts.googleapis.com/css?family=Open+sans|Lato',
		'',
		'',
		'all'
	);

	wp_register_style(
		'ag-style-theme',
		get_stylesheet_uri(),
		array('custom-font'),
		1.0,
		'all'
	);

	wp_enqueue_style('ag-style-theme');

}
add_action('wp_enqueue_scripts','ag_style' );


/* Estilos de wordpress */
 /* Enqueue scripts and styles. */
function bootstrapwp_scripts() {
	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.2.0', 'all' );
	wp_enqueue_style( 'bootstrapwp-style', get_stylesheet_uri() );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.2.0', true );
	//wp_enqueue_script( 'bootstrapwp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
 
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bootstrapwp_scripts' );




//enqueues our external font awesome stylesheet
function enqueue_our_required_stylesheets(){
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');




/* Menus*/
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

function ag_menus() {

	register_nav_menus(array(
		'menu-principal' => 'Menú principal',
		'menu-mobile' => 'Menú Mobile',
		'menu-secundario' => 'Menú secundario',
		'menu-redes' => 'Menú redes sociales'
	));

}
add_action('init', 'ag_menus');


/* Tamaño de imagenes */
if ( function_exists( 'add_image_size' ) ) {  
	add_image_size('thumb_areas', 300, 90, true); 
	add_image_size('home_blog', 300, 180, true); 
	add_image_size('home_servicios', 200, 140, true);
    add_image_size('categoria_blog', 750, 300, true);  
    add_image_size('blog_ampliada', 750, 500, true);
    add_image_size('foto_grande', 1000, 600, true);  
}


/* Widgets */
function ag_registrar_widgets() {
	register_sidebar(array(
		'name' => 'Widgets Footer',
		'id' => 'sidebar_foot',
		'before_widget' => '<div id="%2$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget_title">',
		'afet_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Widgets Pie',
		'id' => 'sidebar_pie',
		'before_widget' => '<div id="%2$s" class="widget">',
		'after_widget' => '</div>',
	));

	register_sidebar(array(
		'name' => 'Widgets Sidebar',
		'id' => 'sidebar_der',
		'before_widget' => '<div id="%2$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget_title">',
		'afet_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Widgets Contactos',
		'id' => 'sidebar_contactos',
		'before_widget' => '<div id="%2$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget_title">',
		'afet_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Widgets Testimonios',
		'id' => 'sidebar_testimonios',
		'before_widget' => '<div id="%2$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget_title">',
		'afet_title' => '</h2>'
	));

}
add_action('widgets_init','ag_registrar_widgets' );



function filter_noticias($query) {
  if ( is_home() && $query->is_main_query() ) {
      $query->set('category_name', 'noticias');
      $query->set( 'posts_per_page', 5 );
  }
}
add_action('pre_get_posts','filter_noticias');



function staff_shortcode( $atts ) {//
$nuestro_staff = new WP_Query(array(
    'post_type' => 'staff',
    'posts_per_page'=> 3,
    'order' => 'desc'
));

if ( $nuestro_staff->have_posts() ): ?>

            <!-- Verificacion del article -->
            <?php while( $nuestro_staff->have_posts() ): $nuestro_staff->the_post() ?>
                 <div class="col-md-4 text-center">
                    
		                <?php // validar si es post tiene imagen destacada
		                if( has_post_thumbnail() ) : ?>
		                    <?php the_post_thumbnail( 'home_blog' );?>
		                <?php endif ; ?>
		                <h4><?php the_title(); ?></h4>
		                <p><?php the_content();?></p>
                    
                 </div>    
            <?php endwhile; ?>
            <!-- Fin verificacion del article -->
  
<?php endif; 
wp_reset_postdata();
}
add_shortcode( 'listar-staff', 'staff_shortcode' );

// Fin nuevo WP Query -->

?>