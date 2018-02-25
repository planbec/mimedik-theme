<?php get_header(); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Content Row -->
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Loop de wordPress -->
                <?php while( have_posts() ) : the_post(); ?>

                    <!-- Preview Image -->
                    <?php // validar si es post tiene imagen destacada
                    if( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'blog_ampliada' );?>
                    <?php endif ; ?>

                    <!-- post -->
                    <h1> <?php the_title(); ?></h1>

                    <hr>

                    <!-- Post Content -->
                    <p><?php the_content(); ?></p>

                <?php endwhile; ?>
                <!-- Fin Loop de wordPress -->


            </div>

        <!-- Side Bar -->
        <?php get_sidebar(); ?>

        </div>
        <!-- /.row -->

        <hr>

<?php get_footer(); ?>