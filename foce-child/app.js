
// Initialisez Swiper
document.addEventListener('DOMContentLoaded', (event) => {
var swiper = new Swiper('.swiper-container', {
  slide: 'coverflow',
  pagination: '.swiper-pagination',
  slidesPerView: 3, // Affiche 3 slides à la fois
  spaceBetween: 20, // Espace entre les slides
  loop: true, // Boucle à travers les slides
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
});
});