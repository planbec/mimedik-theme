<!-- Nuevo WP Query -->
<?php $nuestro_staff = new WP_Query(array(
    'post_type' => 'staff',
    'posts_per_page'=> 3,
    'order' => 'ASC'
));

if ( $nuestro_staff->have_posts() ): ?>


            <!-- Verificacion del article -->
            <?php while( $nuestro_staff->have_posts() ): $nuestro_staff->the_post() ?>
                <ul class="col-serv">
                    <li>
                <?php // validar si es post tiene imagen destacada
                if( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'home_servicios' );?></a>
                <?php endif ; ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </li>
                 </ul>    
            <?php endwhile; ?>
            <!-- Fin verificacion del article -->
  
<?php endif; ?>
<!-- Fin nuevo WP Query -->

<?php wp_reset_postdata(); ?><!-- Limpiar el loop -->