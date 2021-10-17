// Add your custom JS here.

// ページ内リンク スムーススクロール
jQuery(document).ready(function(){
    jQuery('a[href^="#"]').on('click',function (e) {
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