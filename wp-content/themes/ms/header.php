<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head() ?>
  <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-color=#000058 'flex-row' .mb-0 text-white ">
    <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/MS-42x52.png" alt="Logo">ENGLISH AT HOME</a>
    <div class="navbar-collapse" id="navbarSupportedContent">
      <?php 
      wp_nav_menu([
        'theme_location' => 'header',
        'container' => false,
        'menu_class' => "navbar-nav mr-auto"
      ]);

      ?>
      <?php       
  
      ?>
  </nav>
  <div class='banner'>

  </div>

  <div class="container">