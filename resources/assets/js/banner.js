const images = document.querySelectorAll('[data-src]');
console.log('images', images)
Array.from(images).forEach(image => {
  const imageSrc = image.getAttribute('data-src');
  image.onload = () => {
    image.parentElement.classList.add('ready');
  }
  console.log(1)
  image.src = imageSrc
})