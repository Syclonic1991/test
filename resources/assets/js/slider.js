import Ellipsis from 'ellipsis.js';

const sliderEllipsis = Ellipsis({
  debounce: 100,
  responsive: true,
  lines: 6,
  break_word: true,
});

sliderEllipsis.add(document.querySelectorAll('.reviewText'));

$('.sliderContent').slick({
  dots: true,
  speed: 500,
  prevArrow: '.sliderPrevArrow',
  nextArrow: '.sliderNextArrow',
  appendDots: '.sliderContainer',
  dotsClass: 'review__pagination sliderPagination',
});
