$('a[href*="#"]').click(function() {
    var _href = $(this).attr("href");
    $('html, body').animate({ scrollTop: $(_href).offset().top }, 1500);
    return false;
});