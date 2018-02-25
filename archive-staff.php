<?php get_header(); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nuestro staff</h1>
                <h2>&iquest;Qu&eacute; nos hace expertos?</h2>
            </div>
        </div>
        <!-- /.row -->


    <!-- Loop de wordPress -->
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
    <!-- Fin Loop de wordPress -->

<br style="clear:both">
      <div class="redes">
          <strong>e-mail:</strong> <a href="mailto:contacto@avancegenconsultants.com">contacto@avancegenconsultants.com</a><br>

          <ul class="list-inline">
              <li><a href="https://www.facebook.com/avancegen" target="blank"><i class="fa fa-2x fa-facebook-square"></i></a></li>
              <li><a href="https://twitter.com/avancegen" target="blank"><i class="fa fa-2x fa-twitter-square"></i></a></li>
          </ul>
      </div>


        </div>
        <!-- /.row -->


        <hr>

<?php get_footer(); ?>