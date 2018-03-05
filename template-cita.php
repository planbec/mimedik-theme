<?php 
/* Template name: Socilitar cita */
get_header(); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Contact Form -->
        <div class="row">
            <div class="col-md-6">
                <!-- Loop de wordPress -->
                <?php while( have_posts() ) : the_post(); ?>

                    <!-- post -->
                    <h1> <?php the_title(); ?></h1>

                    <hr>

                    <!-- Post Content -->
                    <p><?php the_content(); ?></p>

                <?php endwhile; ?>
                <!-- Fin Loop de wordPress -->
            </div>

         <!-- Side Bar -->
        <?php get_sidebar('contactos'); ?>

        </div>
        <!-- /.row -->

        <hr>

<?php get_footer(); ?>