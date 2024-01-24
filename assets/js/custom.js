$(document).ready(function () {
    $("body").on("click", ".sidebarToggle", function (button) {
        $("header").toggleClass("sideactive");
    });

});