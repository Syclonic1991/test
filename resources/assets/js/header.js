$(function () {
  const $clone = $('#blurClone');
  const $content = $('#pageWrap');
  const $blurWrap = $('#blurWrap');
  const $head = $('head');
  const $cloneBody = $($clone[0].contentDocument).find('body');
  const $cloneHead = $($clone[0].contentDocument).find('head');
  const $deferredStyles = $('#deferred-styles');
  $('.bannerContainer').ready(function () {
    setTimeout(() => {
      console.log('images loaded');
      $cloneBody.html($content.html());
      $cloneBody.append($deferredStyles.html());
      $cloneHead.html($head.html());
      $cloneBody.css({
        'overflow': 'hidden',
        'transform': `translateY(-${window.scrollY}px)`,
        'padding-top': '20px',
        'will-change': 'transform',
      });
    }, 1000);
    setTimeout(() => {
      $blurWrap.css('opacity', 1);
    }, 1300);
  });

  $(window).on('scroll', function () {
    $cloneBody.css('transform', `translate3d(0, -${window.scrollY}px, 0)`);
  });
});
