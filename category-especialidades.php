<?php get_header(); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-12">

<h2 class="titulo-portada">Nuestras Especialidades</h2>

<!-- Nuevo WP Query -->
<?php $servicios_medicos = new WP_Query(array(
    'post_type' => 'especialidades',
    'cat' => 2,
    /*'posts_per_page'=> 5,*/
    'order' => 'desc'
));

if ( $servicios_medicos->have_posts() ): ?>
    
        <!-- post -->
            <?php while( $servicios_medicos->have_posts() ): $servicios_medicos->the_post() ?>
            <div class="col-md-3 text-center">
                <div class="thumbnail staff">

                    <?php // validar si es post tiene imagen destacada
                    if( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blog_ampliada' );?></a>
                    <?php endif ; ?>

                    <div class="caption">
                        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                        <p><?php the_excerpt();?></p>
                        <a href="<?php the_permalink(); ?>"><small>[ver mas]</small></a>

                    </div>
                </div>
            </div>

    <?php endwhile; else: ?>
    
        <?php _e('No hay post','apk_'); ?>
    
    <?php endif; ?>
    <!-- Fin Loop de wordPress -->

    <?php wp_reset_postdata(); ?><!-- Limpiar el loop -->


            </div>


        </div>
        <!-- /.row -->

        <hr>

<?php get_footer(); ?>
