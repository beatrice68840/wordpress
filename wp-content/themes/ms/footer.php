</div>
<footer>

    <div class='footer'>
        <?php 
         wp_nav_menu([
             'theme_location' => 'footer',
            'menu_class' => 'navbar-nav mr-auto',

         ]) 
        ?>

        <div class="row row-cols-3 row-cols-md-3">
            <div class='container flex-container'>
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
        </div>
</footer>
<?php wp_footer() ?>


</body>

</html>