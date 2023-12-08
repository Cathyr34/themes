

/*Fade-in*/
$(document).ready(function() {
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

//slide
var slider = document.querySelector('.slider');
var scrollAmount = 0;
function scrollSlider() {
    scrollAmount += 320; // image + marge
    if (scrollAmount > slider.scrollWidth - slider.clientWidth) {
      scrollAmount = 0;
    }
    slider.scrollTo(scrollAmount, 0);
    
    setTimeout(scrollSlider, 2000);
  }

