<?php get_header(); ?>

    <!-- Header Carousel -->
    <div id="myCarousel" class="carousel slide">
        <div class="slider">
            <h3 class="intro-slider">Servicios médicos en los que puede confiar</h3>
            <?php echo do_shortcode('[wonderplugin_slider id="1"]'); ?>
        </div>
    </div>
    

<!-- Texto citas -->
<div class="container citas">
    <div class="row">
        <div class="col-lg-12">
        <?php get_template_part('home','citas' ); ?>
        </div>
    </div>
</div>


<!-- Sobre nosotros -->
<div class="bg-green">
    <div class="container nosotros">
        <div class="row">
            <?php get_template_part('home','nosotros' ); ?>
        </div>
    </div>
</div>


<!-- Noticias -->
<div class="container noticias">
    <div class="row">
        <div class="col-lg-12">
            <?php get_template_part('home','noticias' ); ?>
        </div>
        <div class="col-lg-12">
            <a href="./noticias/" class="btn btn-home fucsia">Ver m&aacute;s noticias</a>
        </div>
    </div>
</div>


<!-- Servicios -->
<div class="container servicios">
    <div class="row">
        <div class="col-lg-12">
        <?php get_template_part('home','servicios' ); ?>
        </div>
    </div>
</div>


<!-- Testimonios -->
<div class="bg-green">
    <div class="container testimonios">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="titulo-portada">Testimonios</h2>
                <?php echo do_shortcode('[social-proof-slider]'); ?>
            </div>
         </div>
    </div>
</div>

<!-- Mapa -->
<div class="container-fluid mapa">
    <div class="row">
            <?php echo do_shortcode('[wpgmza id="1"]'); ?>
    </div>

 

<?php get_footer(); ?>