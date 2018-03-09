import Ellipsis from 'ellipsis.js';

console.log(Ellipsis);
const sliderEllipsis = Ellipsis({
  debounce: 100,
  responsive: true,
  lines: 6,
  break_word: true,
});

sliderEllipsis.add($('.reviewText')[0]);
console.log(sliderEllipsis);
