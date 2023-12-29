(function ($) {
    "use strict";

    $('.ant026_header-main-header nav').meanmenu({
        meanScreenWidth: "767"
    });

    $('.ant026_header-serach_expand a').on('click', function () {
        $('.ant026_header-search').toggle().toggleClass('ant026_header-active');
    });

})(jQuery);