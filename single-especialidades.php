<?php get_header(); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Content Row -->
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">
            <!-- h5><a href="/especialidades/" class="breadcrumb">Especialidades</a></h5 -->

                <!-- Loop de wordPress -->
                <?php while( have_posts() ) : the_post(); ?>

                    <!-- post -->
                    <h1> <?php the_title(); ?></h1>
                    <hr>

<div class="col-lg-6">
                    <!-- Preview Image -->
                    <?php // validar si es post tiene imagen destacada
                    if( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'foto_especialidades' );?>
                    <?php endif ; ?>
</div>

<div class="col-lg-6">
                    <!-- Post Content -->
                    <p><?php the_content(); ?></p>
</div>

                <?php endwhile; ?>
                <!-- Fin Loop de wordPress -->


            </div>

        <!-- Side Bar -->
        <?php get_sidebar('especialidades'); ?>

        </div>
        <!-- /.row -->

        <hr>

<?php get_footer(); ?>