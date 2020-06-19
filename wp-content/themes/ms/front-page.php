<?php get_header() ?>
<!--code pour inserrer la bannière-->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class='banner .mb-0 col-2'>
            
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner.jpg" alt="Logo">
         
        </div>
            <h1><?php the_title() ?></h1>
            <!--la mettre l'image -->
            <?php the_content() ?>
    <?php endwhile;
endif ?>
       

        <?php the_content() ?>

        <!--pour afficher le lien sur la page accueil pour les derniers articles-->
        <a class="link" href="<?= get_post_type_archive_link('post') ?>"></a>


        <?php get_footer() ?>