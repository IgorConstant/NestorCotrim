$('.scroll').click(function () {
    var divId = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(divId).offset().top - 84
    }, 600);
});