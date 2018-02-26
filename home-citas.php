 <div class="col-md-12">
                <!-- Loop de wordPress -->
                <?php while( have_posts() ) : the_post(23); ?>

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