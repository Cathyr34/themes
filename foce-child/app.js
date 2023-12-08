// Importez Swiper et les modules nécessaires
import Swiper, { Navigation, Pagination } from 'swiper';

// Importez les styles de Swiper et des modules
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Configurez Swiper pour utiliser les modules
Swiper.use([Navigation, Pagination]);

// Initialisez Swiper
const swiper = new Swiper('.swiper-container', {
  effect: 'coverflow',
  loop: true,
  centeredSlides: true,
  slidesPerView: 3,
  initialSlide: 1,
  keyboardControl: true,
  mousewheelControl: true,
  lazyLoading: true,
  preventClicks: false,
  preventClicksPropagation: false,
  lazyLoadingInPrevNext: true,
  coverflow: {
    rotate: 0,
    stretch: 150,
    depth: 200,
    modifier: 1,
    slideShadows: false,
  },
});
jQuery(document).ready(function($) {
  // Maintenant vous pouvez utiliser $ comme raccourci pour jQuery à l'intérieur de cette fonction
  $('.slider').hide();
});
