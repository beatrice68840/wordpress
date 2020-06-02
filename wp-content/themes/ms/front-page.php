<?php get_header() ?>
<!--code pour inserrer la bannière-->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class='banner'>
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/union-jack-2031255_1920.png" alt="Logo">
            </a>
           
            <h1><?php the_title() ?></h1>
            <!--la mettre l'image -->
            <?php the_content() ?>
    <?php endwhile;
endif ?>
        </div>

        <?php the_content() ?>

        <!--pour afficher sur la page accueil les derniers articles-->
        <a class="link" href="<?= get_post_type_archive_link('post') ?>"></a>


        <?php get_footer() ?>