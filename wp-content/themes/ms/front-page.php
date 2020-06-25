<?php get_header() ?>
<!--code pour inserrer la bannière-->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1><?php the_title() ?></h1>
            <!--la mettre l'image -->
            <?php the_content() ?>
    <?php endwhile;
endif ?>
       

        

        <!--pour afficher le lien sur la page accueil pour les derniers articles-->
        <a class="link" href="<?= get_post_type_archive_link('post') ?>"></a>


        <?php get_footer() ?>