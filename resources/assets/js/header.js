$(function () {
  const $clone = $('#blurClone');
  const $content = $('#pageWrap');
  const $blurWrap = $('#blurWrap');
  const $head = $('head');
  const $cloneBody = $($clone[0].contentDocument).find('body');
  const $cloneHead = $($clone[0].contentDocument).find('head');
  $('.bannerContainer').ready(function () { // on.('loaded')
    console.log('images loaded');
    $cloneBody.html($content.html());
    $cloneHead.html($head.html());
    $cloneBody.css({
      'overflow': 'hidden',
      'transform': `translateY(-${window.scrollY}px)`,
      'padding-top': '20px',
    });
  setTimeout(() => {
    $blurWrap.css('opacity', 1);
  }, 300);
  });

  $(window).on('scroll', function () {
    $cloneBody.css('transform', `translateY(-${window.scrollY}px)`);
  });
});
