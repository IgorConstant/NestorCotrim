$(function () {
    var navMain = $("#navbarCollapse");

    navMain.on("click", "a", null, function () {
        navMain.collapse('hide');
    });
});