
<?php

get_header();
?>

    <main id="primary" class="site-main">
       
        <section class="banner">           
            <video class="source" id='myVideo' autoplay muted loop>
                <source src="<?php echo get_stylesheet_directory_uri(); ?>/Studio+Koukaki-vidéo+header+sans+son+(1).mp4" type="video/mp4">
            </video>
            <img class="logovideo" src="<?php echo get_stylesheet_directory_uri(); ?>/images_koukaki/logo.png" alt="logo Fleurs d'oranger & chats errants">
        </section>

        <section class="story  fade-in-section" id="b1">  
            
            <article id="story" class="story__article">
                <h2 id="b2">L'histoire</h2>    
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
                <?php
                $args = array(
                    'post_type' => 'characters',
                    'posts_per_page' => -1,
                    'meta_key'  => '_main_char_field',
                    'orderby'   => 'meta_value_num',

                );
                $characters_query = new WP_Query($args);
                ?>

            <article id="characters">
                <div>
                    <h3>Les personnages</h3>       
                    
                <div class="slider">
                <div class="slide">
                    <img class="slider" src="wp-content/themes/foce-child/images_koukaki/Kawaneko.png" alt="Kawaneko">
                    <div class="caption">Kawaneko</div>
                </div>
                <div class="slide">
                    <img src="wp-content/themes/foce-child/images_koukaki/Orenjiiro-1.png" alt="Orenjiiro-1">
                    <div class="caption">Orenjiiro-1</div>
                </div>
                <div class="slide">
                    <img src="wp-content/themes/foce-child/images_koukaki/Pinku-1.png" alt="Pinku-1">
                    <div class="caption">Pinku-1</div>
                </div>
                <div class="slide">
                    <img src="wp-content/themes/foce-child/images_koukaki/Tenshi-1.png" alt="Tenshi-1">
                    <div class="caption">Tenshi-1</div>
                </div>
                <div class="slide">
                    <img src="wp-content/themes/foce-child/images_koukaki/Jaakuna-1.png" alt="Jaakuna-1">
                    <div class="caption">Jaakuna-1</div>
                </div>
                
                </div></div>
                
            </article>
        

        <section id="place" class= "fade-in-section">
            <div>
                <h3>Le Lieu</h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>
            <div class="nuages">
                <img class="gros" src="wp-content/themes/foce-child/images_koukaki/big_cloud.png" alt= "gros nuage">
                <img class="petit" src="wp-content/themes/foce-child/images_koukaki/little_cloud.png" alt= "petit nuage">
            </div>

        </section></section>

        <section id="studio" class= "fade-in-section">
           
            <div> 
                <h2>Studio Koukaki</h2>
                </div><div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

    </main><!-- #main -->

<?php
get_footer();
