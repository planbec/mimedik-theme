<?php 
/* Template name: Categoria Blog */
get_header(); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-12">

<h2 class="titulo-portada">Especialidades</h2>
    <!-- Loop de wordPress 
    <?php if(have_posts() ) : while( have_posts() ) : the_post(); ?>
    
        <!-- post -->
            <div class="col-md-4 text-center">
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
     Fin Loop de wordPress -->



                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <?php previous_posts_link('&larr; Previos'); ?>
                    </li>
                    <li class="next">
                        <?php next_posts_link( 'Siguientes &rarr;'); ?>
                    </li>
                </ul>

            </div>


        </div>
        <!-- /.row -->

        <hr>

<?php get_footer(); ?>
