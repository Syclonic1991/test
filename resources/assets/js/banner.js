import _ from 'lodash';

function randomBetween(min, max) {
  return Math.floor(Math.random() * (max - min + 1) + min);
}
function inViewport(el) {
  let r;
  let html;
  if (!el || el.nodeType !== 1) { return false; }
  html = document.documentElement;
  r = el.getBoundingClientRect();

  return (!!r
      && r.bottom >= 0
      && r.right >= 0
      && r.top <= html.clientHeight
      && r.left <= html.clientWidth
  );
}

function isRetina() {
  return ((window.matchMedia && (window.matchMedia('only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx), only screen and (min-resolution: 75.6dpcm)').matches || window.matchMedia('only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (min--moz-device-pixel-ratio: 2), only screen and (min-device-pixel-ratio: 2)').matches)) || (window.devicePixelRatio && window.devicePixelRatio >= 2));
}

function isMobile() {
  const mobileResolution = 768;
  return window.innerWidth <= mobileResolution;
}

function getImageDirectory() {
  const desktop = 'desktop';
  const mobile = 'mobile';
  const retina = '2x';

  let directory;
  if (isMobile()) {
    directory = isRetina() ? desktop : mobile;
  } else {
    directory = isRetina() ? retina : desktop;
  }
  return directory;
}

let sources = _.shuffle(Array.from({ length: 30 }).map((item, idx) => `img-${idx + 1}.jpg`));

window.banner = {};

const loadImages = () => {
  window.banner.directory = getImageDirectory();
  let imagesLoaded = 0;

  const countImagesInViewport = Array.from(document.querySelectorAll('.bannerImage img')).reduce((acc, elm) => {
    if (inViewport(elm)) {
      acc += 1;
    }
    return acc;
  }, 0);

  if (countImagesInViewport > 30) {
    const diff = countImagesInViewport - 30;
    sources = sources.concat(sources.slice(0, diff));
  } else if (countImagesInViewport === 0) {
    $(() => $('.bannerContainer').trigger('loaded'));
  }

  Array.from(document.querySelectorAll('.bannerImage')).map(elm => elm.classList.remove('ready'));

  const images = document.querySelectorAll('.bannerImage img');
  let lastIndex = 0;
  Array.from(images).forEach((elm, idx) => {
    if (!inViewport(elm)) {
      console.log('THIS ELEMENT IS NOT IN VIEWPORT', elm);
      return;
    }
    const loadTimeStart = Date.now();
    const sourcePath = `https://biospetsimg${(idx % 2) + 1}.abz.agency/assets/images/banner/${window.banner.directory}/`;
    const imageSource = sources[lastIndex];
    lastIndex += 1;
    elm.src = sourcePath + imageSource;
    elm.onload = () => {
      // if (Date.now() - loadTimeStart < 0) {
      console.log('MANUAL TIMEOUT');
      setTimeout(() => {
        elm.parentElement.classList.add('ready');
        imagesLoaded += 1;
        if (imagesLoaded >= countImagesInViewport) {
          $('.bannerContainer').trigger('loaded');
        }
      }, randomBetween(500, 1700));
      // } else {
      //   elm.parentElement.classList.add('ready');
      //   imagesLoaded += 1;
      //   if (imagesLoaded >= countImagesInViewport) {
      //     $('.bannerContainer').trigger('loaded');
      //   }
      // }
    };
  });
  // console.log('INITIALY IMAGES LOADEd -> ', imagesLoaded)
};


loadImages();

const resizeListener = () => {
  console.log('RESIZE LISTENER RUNNING');
  const images = document.querySelectorAll('.bannerImage img');
  Array.from(images).forEach((elm, idx) => {
    console.log((inViewport(elm) && (elm.parentElement.className.indexOf('ready') === -1)));
    if ((inViewport(elm) && (elm.parentElement.className.indexOf('ready') === -1)) || (window.banner.directory !== getImageDirectory())) {
      console.log('THIS ELEMENT IS  IN VIEWPORT !! NEED TOL LOAD IMAGE', elm);
      _.throttle(() => {
        $('.bannerContainer').trigger('loading');
      }, 500)();

      sources = _.shuffle(sources);
      loadImages();
    }
  });
};

window.addEventListener('resize', _.debounce(resizeListener, 500));
window.addEventListener('scroll', _.debounce(resizeListener, 500));
