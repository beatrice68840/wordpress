<?php 


class SponsoMetaBox{

    public static function register(){
        add_action('add_meta_boxes', [self::class,'add']);
        add_action('save_post', [self::class,'save']);

    }

    public static function add(){
        add_meta_box('ms_sponso', 'sponsoring', [self::class, 'render'], 'post', 'side');
    }

    public static function render(){
        ?>
    <input type='hidden' value='mssponso'></imput>
    <input type='checkbox' value='1' name='mssponso'></input>
    <label for="mssponso">Cette article est sponsorisé ?</label>
<?php
    }

    public static function save(){
        if (array_key_exists('ms_sponso', $_POST)) {
            if ($_POST['ms_sponso'] === '0') {
                delete_post_meta($post_id, 'ms_sponso');
            } else {
                update_post_meta($post_id, 'ms_sponso', 1);
            }
        }
    }
} 