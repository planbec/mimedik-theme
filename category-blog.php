<?php 
/* Template name: Categoria Blog */
get_header(); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">


        <!-- Loop de wordPress -->
        <?php 
        query_posts('category_name=noticias' );
        if(have_posts() ) :
            while( have_posts() ) :
                the_post();?>

                <!-- post -->
                    <?php // validar si es post tiene imagen destacada
                    if( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'categoria_blog' );?></a>
                    <?php endif ; ?>

                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                

                <small><i class="fa fa-clock-o"></i> Publicado el <?php the_time( get_option('date_format') ) ?> at 10:00 PM</small>

                <p><?php the_excerpt(); ?></p>
                <a class="btn btn-primary" href="<?php the_permalink(); ?>">Ver m&aacute;s <i class="fa fa-angle-right"></i></a>
                <hr>

        <?php
            endwhile;
        else:?>
        
                <p class="text-center">No hay post para mostrar</p>

        <?php   
        endif;?>
        <!-- Fin Loop de wordPress -->



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

        <!-- Side Bar -->
        <?php get_sidebar('sidebar-der'); ?>

        </div>
        <!-- /.row -->

        <hr>

<?php get_footer(); ?>
