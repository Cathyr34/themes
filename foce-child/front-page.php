
<?php

get_header();
?>

    <main id="primary" class="site-main">
       
        <section class="banner fade-in-section">           
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
        </section>
        
        <section  class= "fade-in-section">
            <div id="characters">
                <h3>Les personnages</h3>
            </div>
            <article>
            <p><?php get_template_part( 'slider' ); ?></p>
            </article>
        

            <div id="place" class="place fade-in-section">
                    
                <h3>Le Lieu</h3>
                    
                        <p><?php echo get_theme_mod('place'); ?></p>
                    
                    <div class="nuages">
                        <img class="gros" src="wp-content/themes/foce-child/images_koukaki/big_cloud.png" alt= "gros nuage">
                        <img class="petit" src="wp-content/themes/foce-child/images_koukaki/little_cloud.png" alt= "petit nuage">
                    </div>
                
            
            </div>
        </section>  

        <section id="studio" class= "fade-in-section">
           
            <div> 
                <h2>Studio Koukaki</h2>
            </div>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

    </main><!-- #main -->

<?php
get_footer();
