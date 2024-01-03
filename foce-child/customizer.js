

/*Fade-in*/
jQuery(document).ready(function($) {
    var controller = new ScrollMagic.Controller();

    // Sélectionner toutes les sections
    $('section').each(function() {

        // Créer une scène pour chaque section
        var scene = new ScrollMagic.Scene({
            triggerElement: this,  // Point de départ
            duration: '100%',      
            triggerHook: 0.9      // Déclenche l'animation à 90% du bas de la fenêtre
        })
        .setClassToggle(this, 'fade-in-section') 
        .addTo(controller);  // Ajouter la scène au contrôleur
    });
});

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


//vidéo
document.addEventListener('DOMContentLoaded', function() {
    
    var video = document.getElementById('myVideo');

    video.addEventListener('canplaythrough', function() {
        video.play();
    });
});

  /*Menu*/
  function showResponsiveMenu() {
    var menu = document.getElementById("mesliens");
    var icon = document.getElementById("site-navigation_hamburger_icon");
    
    if (!menu.classList.contains("open")) { /*vérifie si la class open est présente*/
      menu.classList.add("open");
      icon.classList.add("open"); 
    } 
    else {
      menu.classList.remove("open");
      icon.classList.remove("open"); 
    }
  }
  $(".menu a").click( () => {
    $("mesliens.responsive-menu").toggled("open");
});
