<head>
    
    <style>
        .fade-in-section {
            opacity: 0;
            transition: opacity 2s;
        }
    </style>
  
  <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>

<script>
    window.addEventListener('scroll', function() {
        var sections = document.querySelectorAll('.fade-in-section');
        sections.forEach(function(section) {
            var sectionTop = section.getBoundingClientRect().top;
            var screenPosition = window.innerHeight / 1.3;
            if(sectionTop < screenPosition) {
                section.style.opacity = '1';
            } else {
                section.style.opacity = '0';
            }
        });
    });
</script>

</body>
<?php

get_header();
?>

    <main id="primary" class="site-main">
       
        <section class="banner">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>">
            
            <video class="source" id='myVideo' autoplay muted loop>
                <source src="foce-child/Studio+Koukaki-vidéo+header+sans+son+(1).mp4" type="video/mp4">
            </video>
            <img class="logovideo" src="foce-child/images_koukaki/logo.png" alt="logo Fleurs d'oranger & chats errants">
        </section>

        <section class="story fade-in-section">
           
            <article id="story" class="story__article">
            <h2>L'histoire</h2>    
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
                <div class="main-character fade-in-section">
                    <h3>Les personnages</h3>   
                    
                <div id="slider">
                    <script src="foce-child/customizer.js"></script>
                    <?php
                    while ( $characters_query->have_posts() ) {
                        $characters_query->the_post();
                        echo '<div class="slide">';
                        echo get_the_post_thumbnail( get_the_ID(), array(300, 300) );
                        echo '<div class="slide caption">';
                        the_title();
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div></div>
                
            </article>
            <section id="place">
                <div class= "fade-in-section">
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                    <div class="container">
                    <img class="nuages move" src="foce-child/images_koukaki/big_cloud.png" alt= "gros nuage">
                    <img class="nuages move" src="foce-child/images_koukaki/little_cloud.png" alt= "petit nuage">
                    </div>
   
                </div>

                </section>
        </section>

        <section id="studio">
           
            <div class= "fade-in-section"> 
                <h2>Studio Koukaki</h2>
                </div><div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

    </main><!-- #main -->

<?php
get_footer();
