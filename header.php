<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php wp_title('&raquo;', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97339978-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>
<header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 navbar-brand">
                    <a class="logo" href="/">
                        <img title="<?php bloginfo('name'); ?> &nbsp;|&nbsp; <?php bloginfo('description'); ?>" src="<?php echo get_template_directory_uri(); ?>/images/logo_miMedik.png">
                    </a>
                </div>

                <!-- Navigation -->
                <div class="col-lg-12">
                        <!-- Collect the nav links, forms, and other content for toggling -->

                     <div class="redes">
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
                        <nav >
                          <?php wp_nav_menu( array(
                            'menu' => 'header-menu',
                            'theme_location' => 'menu-principal',
                            'depth' => 2,
                            'container' => 'cont',
                            'container_class' => '',
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker())
                          );?>
                        </nav>
                </div><!-- navigation -->
            </div><!-- Row -->
        </div><!-- /.container -->
</header>


        
