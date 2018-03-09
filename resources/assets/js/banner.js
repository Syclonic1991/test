import lodash from 'lodash';
function randomBetween(min,max)
{
    return Math.floor(Math.random()*(max-min+1)+min);
}
function inViewport (el) {
    var r, html;
    if ( !el || 1 !== el.nodeType ) { return false; }
    html = document.documentElement;
    r = el.getBoundingClientRect();

    return ( !!r 
      && r.bottom >= 0 
      && r.right >= 0 
      && r.top <= html.clientHeight 
      && r.left <= html.clientWidth 
    );
}

let imagesLoaded = 0;
//   let sources = [];

let sources = [
    '/assets/images/banner/img-1.jpg',
    '/assets/images/banner/img-2.jpg',
    '/assets/images/banner/img-3.jpg',
    '/assets/images/banner/img-4.jpg',
    '/assets/images/banner/img-5.jpg',
    '/assets/images/banner/img-6.jpg',
    '/assets/images/banner/img-7.jpg',
    '/assets/images/banner/img-8.jpg',
    '/assets/images/banner/img-9.jpg',
    '/assets/images/banner/img-10.jpg',
    '/assets/images/banner/img-11.jpg',
    '/assets/images/banner/img-12.jpg',
    '/assets/images/banner/img-13.jpg',
    '/assets/images/banner/img-14.jpg',
    '/assets/images/banner/img-15.jpg',
    '/assets/images/banner/img-16.jpg',
    '/assets/images/banner/img-17.jpg',
    '/assets/images/banner/img-18.jpg',
    '/assets/images/banner/img-19.jpg',
    '/assets/images/banner/img-20.jpg',
    '/assets/images/banner/img-21.jpg',
    '/assets/images/banner/img-22.jpg',  
    '/assets/images/banner/img-23.jpg',  
    '/assets/images/banner/img-24.jpg',  
    '/assets/images/banner/img-25.jpg',  
    '/assets/images/banner/img-26.jpg',  
    '/assets/images/banner/img-27.jpg',  
    '/assets/images/banner/img-28.jpg',  
    '/assets/images/banner/img-29.jpg',  
    '/assets/images/banner/img-30.jpg',
    '/assets/images/banner/img-5.jpg',
    '/assets/images/banner/img-6.jpg',
    '/assets/images/banner/img-7.jpg',
    '/assets/images/banner/img-8.jpg',
    '/assets/images/banner/img-9.jpg',
    '/assets/images/banner/img-10.jpg', 
    '/assets/images/banner/img-15.jpg',
    '/assets/images/banner/img-16.jpg',
    '/assets/images/banner/img-17.jpg',
    '/assets/images/banner/img-18.jpg'
];
let sources1 = [
    '/assets/images/banner/img-1.jpg',
    '/assets/images/banner/img-2.jpg',
    '/assets/images/banner/img-3.jpg',
    '/assets/images/banner/img-4.jpg',
    '/assets/images/banner/img-5.jpg',
    '/assets/images/banner/img-6.jpg',
    '/assets/images/banner/img-7.jpg',
    '/assets/images/banner/img-8.jpg',
    '/assets/images/banner/img-9.jpg',
    '/assets/images/banner/img-10.jpg',
    '/assets/images/banner/img-11.jpg',
    '/assets/images/banner/img-12.jpg',
    '/assets/images/banner/img-13.jpg',
    '/assets/images/banner/img-14.jpg',
    '/assets/images/banner/img-15.jpg',
    '/assets/images/banner/img-16.jpg',
    '/assets/images/banner/img-17.jpg',
    '/assets/images/banner/img-18.jpg',
    '/assets/images/banner/img-19.jpg',
    '/assets/images/banner/img-20.jpg',
    '/assets/images/banner/img-21.jpg',
    '/assets/images/banner/img-22.jpg',  
    '/assets/images/banner/img-23.jpg',  
    '/assets/images/banner/img-24.jpg',  
    '/assets/images/banner/img-25.jpg',  
    '/assets/images/banner/img-26.jpg',  
    '/assets/images/banner/img-27.jpg',  
    '/assets/images/banner/img-28.jpg',  
    '/assets/images/banner/img-29.jpg',  
    '/assets/images/banner/img-30.jpg'
];
const changeArray = () => {
    if (window.innerWidth() > 2000) {
        sources = sources1;
    }
    else {
        sources = sources2;
    }
}
//   Array.from({ length: 30}).map((item, idx) => sources.push(`https://biospets.abz.agency/assets/images/banner/img-${idx + 1}.jpg`))
  sources = _.shuffle(sources)
  

const loadImages = () => {

  Array.from(document.querySelectorAll('.bannerImage')).map(elm => elm.classList.remove('ready'))

  const images = document.querySelectorAll('.bannerImage img')
  Array.from(images).forEach((elm, idx) => {
    if (!inViewport(elm)) {
      console.log('THIS ELEMENT IS NOT IN VIEWPORT', elm)
      return;
    }
    const loadTimeStart = Date.now();
    const imageSource = sources[idx]
    elm.src = imageSource
    elm.onload = () => {
      if (Date.now() - loadTimeStart < 200) {
        console.log('MANUAL TIMEOUT')
        setTimeout(() => {
               elm.parentElement.classList.add('ready');
        }, randomBetween(300, 1000))
      } else {
        elm.parentElement.classList.add('ready');
      }
     
    }
    imagesLoaded += 1;
    
  })
  console.log('INITIALY IMAGES LOADEd -> ', imagesLoaded)
}

                                
loadImages();

const resizeListener = () => {
    console.log('RESIZE LISTENER RUNNING')
  const images = document.querySelectorAll('.bannerImage img')
    Array.from(images).forEach((elm, idx) => {
    if (inViewport(elm) && !elm.src) {
      console.log('THIS ELEMENT IS  IN VIEWPORT !! NEED TOL LOAD IMAGE', elm)
      
      sources = _.shuffle(sources)
      loadImages();
      return;
    }
 
  })
}

window.addEventListener('resize', _.debounce(changeArray, 500))
window.addEventListener('resize', _.debounce(resizeListener, 500))