

$(document).ready(function() {
    // Initialiser ScrollMagic
    var controller = new ScrollMagic.Controller();

    // Sélectionner toutes les sections
    $('section').each(function() {

        // Créer une scène pour chaque section
        var scene = new ScrollMagic.Scene({
            triggerElement: this,  // Point de départ
            duration: '100%',      // Durée de l'animation
            triggerHook: 0.8       // Déclenche l'animation à 80% du bas de la fenêtre
        })
        .setTween(TweenMax.from(this, 1, {autoAlpha: 0}))  // (TweenMax.from crée un effet de fondu)
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

//slide

var slider = document.querySelector('.slider');
var scrollAmount = 0;

// Faire défiler les images toutes les 2 secondes
setInterval(function() {
  scrollAmount += 300; // Largeur d'une image
  if (scrollAmount >= slider.scrollWidth) {
    scrollAmount = 0;
  }
  slider.scrollTo(scrollAmount, 0);
}, 2000);

