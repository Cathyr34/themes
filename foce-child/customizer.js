

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
var titles = document.querySelectorAll('h2 span, h3 span');
var sections = document.querySelectorAll('.fade-in-section');
window.addEventListener('scroll', function() {
   
    sections.forEach(function(section) {
        var sectionTop = section.getBoundingClientRect().top;
        var screenPosition = window.innerHeight / 1.3;
        if(sectionTop < screenPosition) {
            section.style.opacity = '1';
        } else {
            section.style.opacity = '0';
        }
    });
    titles.forEach(function(title) {
      var titleTop = title.getBoundingClientRect().top;
      var screenPosition = window.innerHeight / 1.3;
      if(titleTop < screenPosition) {
        title.className = 'apparition';
      } else {
        title.className = '';
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

 const menu = document.getElementById("mesliens");
    const icon = document.getElementById("site-navigation_hamburger_icon");

  function showResponsiveMenu() {
   

    if (!menu.classList.contains("open")) { /*vérifie si la class open est présente*/
      menu.classList.add("open");
      icon.classList.add("open"); 
    } 
    else {
      menu.classList.remove("open");
      icon.classList.remove("open"); 
    }
  }

  var menuLinks = document.querySelectorAll('.responsive-menu a');

// Parcourez chaque lien
for (var i = 0; i < menuLinks.length; i++) {
    // Ajoutez un écouteur d'événements pour le clic
    menuLinks[i].addEventListener('click', function(event) {
      showResponsiveMenu()

});
}

// Déplacement des nuages au scroll
window.addEventListener('scroll', function() {
  var scrollPosition = window.scrollY;
  var nuagesElement = document.querySelector('.nuages');
  nuagesElement.style.transform = 'translateX(' + (-300 + scrollPosition) + 'px)';
});
