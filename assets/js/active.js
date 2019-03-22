$(document).ready(function () {
    // sticky header js start
    $(window).scroll(function () {
        if ($(this).scrollTop() > 340) {
            $('.menu-area').addClass("sticky")
        } else {
            $('.menu-area').removeClass("sticky")
        }
    }); // sticky header js end

    //smooth scroll js start
    $('.smooth-scroll').click(function (z) {
        var hreflink = $(this).attr('href');
        $('html , body').animate({
            scrollTop: $(hreflink).offset().top
        }, 1200);
        z.preventDefault();
    }); //smooth scroll js end
});
