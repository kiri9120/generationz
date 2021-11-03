// Add your custom JS here.

// ページ内リンク スムーススクロール
jQuery(document).ready(function(){
    jQuery('a[href^="#"]').not('#pagetop').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = jQuery(target);

        jQuery('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 500, 'swing', function () {
        window.location.hash = target;
        });
    });
});


jQuery(function(){
  var pagetop = jQuery('#pagetop');
  pagetop.hide();
  jQuery(window).scroll(function () {
     if (jQuery(this).scrollTop() > 100) {
          pagetop.fadeIn();
     } else {
          pagetop.fadeOut();
     }
  });
  pagetop.click(function () {
    jQuery('body, html').animate({ scrollTop: 0 }, 500);
     return false;
  });
});