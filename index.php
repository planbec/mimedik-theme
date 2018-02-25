<?php get_header(); ?>

    <!-- Page Content -->
    <div class="container">


        <!-- Project One -->
        <div class="row">
            <div class="col-md-8">

            <!-- Loop de wordPress -->
            <?php if(have_posts() ) : while( have_posts() ) : the_post(); ?>

                    <!-- Preview Image -->
                    <?php // validar si es post tiene imagen destacada
                    if( has_post_thumbnail() ) : ?>
                        <div class="col-md-4">
                    <small class="cat">Categor&iacute;a: <?php the_category(', ' ); ?></small>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'home_blog' );?>
                            </a>
                        </div>
                        <div class="col-md-8">
                    <?php else:?>    
                    <div class="col-md-12">
                    <small class="cat">Categor&iacute;a: <?php the_category(', ' ); ?></small>
                    <?php endif ; ?>

                    <!-- post -->
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                    <p><?php the_excerpt(); ?></p>
                    <a class="btn btn-primary" href="<?php the_permalink(); ?>">Ver más [+]</i></a>
                </div>

                &nbsp;
                <hr>                

            <?php endwhile; else: ?>

                <?php _e('No hay post','apk_'); ?>

            <?php endif; ?>
            <!-- Fin Loop de wordPress -->

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
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


            </div>

        <!-- /.row -->


        <!-- Side Bar -->
        <?php get_sidebar('sidebar-der'); ?>

    </div>




<?php get_footer(); ?>
