<h2 class="titulo-portada">Noticias</h2>
    <?php query_posts( array ( 
        'category_name' => 'noticias', 
        'posts_per_page' => 3 
    )); ?>
    
    <?php while (have_posts()) : the_post(); ?>
            <div class="col-md-4">
                <div class="panel-noticias">
                    <?php // validar si es post tiene imagen destacada
                    if( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'home_blog' );?></a>
                    <?php endif ; ?>
                </div>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            </div>
    <?php endwhile; 
    wp_reset_postdata();?>
<!-- Fin loop para noticias -->