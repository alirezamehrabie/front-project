const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  speed: 400,
  spaceBetween: 100,
  loop: true,
  autoplay: true,
  slidesPerView: 1,
  spaceBetween: 2,



  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
