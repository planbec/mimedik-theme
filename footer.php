    </div>
        <!-- /.container -->

    <!-- Widgets footer -->
    <div class="prefooter bg-gray">
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
    <div class="piefooter bg-green">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php 
                        if(is_active_sidebar('sidebar_pie' )):
                            dynamic_sidebar('sidebar_pie' );
                        endif; 
                    ?>
                </div>
            </div>
        </div>
    </div>


        <div class="container copy">
            <div class="row">
                <div class="col-lg-9">
                    <p><?php bloginfo('name'); ?> | Copyright &copy; Todos los derechos reservados <?php echo date('Y'); ?></p>
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
