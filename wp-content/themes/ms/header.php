<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENGLISH AT HOME</title>
    <?php wp_head() ?>
    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
</head>   
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-color=#000058 .mb-0 text-white ">
    <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/MS-42x52.png" alt="Logo">ENGLISH AT HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php wp_nav_menu([
        'theme_location' => 'header',
        'container' => false,
        'menu_class' => "navbar-nav mr-auto"
      ]) 
      ?>

</nav>
<div class='banner'>

</div>

    <div class="container">

    
