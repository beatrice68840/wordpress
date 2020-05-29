<?php get_header() ?>

<?php while(have_posts()): the_post() ?>
    <h1><?php the_title() ?></h1>
    <?php the_content() ?>

    <!--pour afficher sur la page accueil les derniers articles-->
    <a class="link" href="<?= get_post_type_archive_link('post') ?>">Voir les dernièrs voyages linguistique</a>
<?php endwhile; ?>

<?php get_footer() ?>