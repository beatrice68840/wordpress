</div>
<footer>
    <div class='footer'>
        <?php wp_nav_menu([
            'theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'navbar-nav mr-auto',

        ]) ?>
        <div class="row row-cols-1 row-cols-md-3">
            <div class='contact'>
                <p>CONTACT</br>
                    MÉLISSA STARCK</br>
                    lieu : 68100 MULHOUSE</br>
                    email : mrs.starck.english@gmail.com
                </p>
            </div>
            <div class='nom'>
                <p>© Site créé par BÉATRICE HATSCH </p>
            </div>
        </div>
</footer>
<?php wp_footer() ?>


</body>

</html>