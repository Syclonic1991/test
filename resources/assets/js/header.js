$(function () {
  var $clone = $('#blurClone');
  var $content = $('#pageWrap');
  var $head = $('head');
  var $cloneBody = $($clone[0].contentDocument).find('body');
  var $cloneHead = $($clone[0].contentDocument).find('head');
  var $cloneWindow = $($clone[0].contentWindow);

  $cloneBody.html($content.html());
  $cloneHead.html($head.html());
  $cloneBody.css({
    'overflow': 'hidden',
    'transform': `translateY(-${window.scrollY}px)`,
    'padding-top': '10px',
  });
  $clone.css('opacity', 1);

  $(window).on('scroll', function () {
    $cloneBody.css('transform', `translateY(-${window.scrollY}px)`);
  });
});
