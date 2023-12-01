

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
//vidéo
document.addEventListener('DOMContentLoaded', function() {
    
    var video = document.getElementById('myVideo');

    video.addEventListener('canplaythrough', function() {
        video.play();
    });
});

//slide
var slides = document.querySelectorAll(".slide");
var currentSlide = 0;

// Ajoutez la classe 'showing' au premier slide
slides[currentSlide].classList.add('showing');

function nextSlide() {
  // Retirez la classe 'showing' du slide actuel
  slides[currentSlide].classList.remove('showing');

  // Passez au slide suivant
  currentSlide++;
  if (currentSlide == slides.length) {
    currentSlide = 0;
  }

  // Ajoutez la classe 'showing' au nouveau slide actuel
  slides[currentSlide].classList.add('showing');

  // Déplacez le slider
  document.querySelector(".slide").scrollLeft = slides[currentSlide].offsetLeft;

  // Appellez nextSlide après un délai
  setTimeout(nextSlide, 3000); 
}

// Commencez le défilement
nextSlide();