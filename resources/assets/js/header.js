$(() => {
  const $clone = $('#blurClone');
  const $content = $('#pageWrap');
  const $blurWrap = $('#blurWrap');
  const $head = $('head');
  const $cloneBody = $($clone[0].contentDocument).find('body');
  const $cloneHead = $($clone[0].contentDocument).find('head');
  const $deferredStyles = $('#deferred-styles');
  const $bannerContainer = $('.bannerContainer');

  $bannerContainer.on('loading', () => {
    console.log('loading images...');
    $blurWrap.css({
      transition: 'none',
      opacity: '0',
    });
  });

  $bannerContainer.on('loaded', () => {
    console.log('images loaded');
    $cloneBody.html($content.html());
    $cloneBody.append($deferredStyles.html());
    $cloneHead.html($head.html());
    $cloneBody.css({
      overflow: 'hidden',
      transform: `translate3d(0, -${window.scrollY}px, 0)`,
      'padding-top': '20px',
      'will-change': 'transform',
    });
    setTimeout(() => {
      $blurWrap.css({
        transition: '',
        opacity: '1',
      });
    }, 300);
  });

  $(window).on('scroll', () => {
    $cloneBody.css('transform', `translate3d(0, -${window.scrollY}px, 0)`);
  });
});
