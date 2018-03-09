import Ellipsis from 'ellipsis.js';

const sliderEllipsis = Ellipsis({
  debounce: 100,
  responsive: true,
  lines: 6,
  break_word: true,
});

sliderEllipsis.add(document.querySelectorAll('.reviewText'));
