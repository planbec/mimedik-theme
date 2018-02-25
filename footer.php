    </div>
        <!-- /.container -->

    <!-- Widgets footer -->
    <div class="prefooter bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php 
                        if(is_active_sidebar('sidebar_foot' )):
                            dynamic_sidebar('sidebar_foot' );
                        endif; 
                    ?>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer>
    <div class="bg-green">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/btn_Home.png"></a>
                </div>
                <div class="col-lg-7">
                    <p align="right"><a href="mailto:contacto@avancegen.com">contacto@avancegen.com</a>&nbsp;<a href="http://www.avancegen.com">www.avancegen.com</a></p>
                </div>
                <div class="col-lg-3">
                     <div class="redes-footer">
                        <?php wp_nav_menu( array(
                            'menu' => 'header-menu',
                            'theme_location' => 'menu-redes',
                            'depth' => 3,
                            'container' => 'cont',
                            'container_class' => '',
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker())
                          );?>
                     </div>
                </div>
            </div>
        </div>
    </div>


        <div class="container copy">
            <div class="row">
                <div class="col-lg-9">
                    <p><?php bloginfo('name'); ?> | Copyright &copy; Todos los derechos reservados 2017</p>
                </div>
                <div class="col-lg-3">
                    <p align="right">Desarrollado por: <a href="http://www.planb.ec" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_planB.png"></a></p>
                </div>
            </div>
        </div>


        <div class="container publicidad">
            <div class="row">
                <div class="col-lg-12">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- AvanceGen -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6551765504420290"
     data-ad-slot="8486019101"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                </div>
            </div>
        </div>


    </footer>


    <!-- jQuery 
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    -->

    <!-- Bootstrap Core JavaScript -->
    <!--script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script-->

 
<?php wp_footer(); ?>

</body>
</html>
