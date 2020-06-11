<?php get_header() ?>
<?php if (have_posts()) : ?>
    <div class="row">
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-sm-4">
                <div class="card">
                    <?php the_post_thumbnail('medium', ['class'=> 'card-img-top', 'alt'=> '', 'style'=> 'height: auto;']) ?>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <p class="card-text">
                            <?php the_content("En voir plus") ?>
                        </p>
                        <a href="<?php the_permalink() ?>" class="card-link"> </a>
                        <a href="#" class="card-link"></a>
                    </div>
                </div>
            </div>
        <?php endwhile ?>

    </div>

    <?php ms_pagination() ?>


<?php else : ?>
    <h1>Pas d'article</h1>
<?php endif; ?>



<?php get_footer() ?>