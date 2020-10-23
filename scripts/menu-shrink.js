$(document).on("scroll", function () {
    if ($(document).scrollTop() > 50) {
        $("#banner").addClass("shrink");
    } else {
        $("#banner").removeClass("shrink");
    }
});