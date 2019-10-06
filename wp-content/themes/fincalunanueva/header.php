<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head <?php do_action( 'add_head_attributes' ); ?>>

    <!-- Title -->
    <!-- =================================== -->
    <title><?php wp_title(''); ?></title>
    
    <!-- Styles -->
    <!-- =================================== -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/icons/touch.png" rel="apple-touch-icon-precomposed">

    <!-- Meta -->
    <!-- =================================== -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Typekit -->
    <!-- =================================== -->
    <script src="https://use.typekit.net/sns3qns.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <!-- Wordpress Generated -->
    <!-- =================================== -->
    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>
  
    <!-- Google Analytics -->
    <!-- =================================== -->
    <?php get_template_part( 'includes/analyticstracking' ); ?>

    <!-- Facebook -->
    <!-- =================================== -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1136818676377942',
          xfbml      : true,
          version    : 'v2.6'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Pinterest -->
    <!-- =================================== -->
    <script
        type="text/javascript"
        async defer
        src="//assets.pinterest.com/js/pinit.js"
    ></script>


    <!-- Navbar -->
    <!-- =================================== -->
    <nav class="site-header navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <!-- Mobile menu toggle -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Site logo -->
          <a class="navbar-brand" href="/">
            <img class="logo-mark" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-mark-white.png" alt="Site logo">
            <img class="logo-type" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-type-white.svg" alt="Finca Luna Nueva Lodge">
          </a>
        </div>
        <!-- Collect the nav links for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <?php primary_nav(); ?>
        </div>
      </div>
    </nav>