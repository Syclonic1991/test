const $blurWrap = $('#blurWrap');
const $blur = $('#blurBlock');
const supportsBackdropFilter = ($blur.css('backdrop-filter') && $blur.css('backdrop-filter') !== 'none') ||
                               ($blur.css('-webkit-backdrop-filter') && $blur.css('-webkit-backdrop-filter') !== 'none');

if (supportsBackdropFilter) {
  $blurWrap.css({
    opacity: '1',
  });
} else {
  $(() => {
    const $clone = $('#blurClone');
    const $content = $('#pageWrap');
    const $head = $('head');
    const $cloneBody = $($clone[0].contentDocument).find('body');
    const $cloneHead = $($clone[0].contentDocument).find('head');
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
      const deferredStylesContent = $('noscript#deferred-styles').text() || $('div#deferred-styles').html();
      $cloneBody.html($content.html());
      $cloneBody.append($(deferredStylesContent));
      $cloneHead.html($head.html());
      $cloneBody.css({
        overflow: 'hidden',
        transform: `translate3d(0, -${window.scrollY}px, 0)`,
        'padding-top': '23px',
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
}

