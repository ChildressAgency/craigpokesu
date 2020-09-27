/*!
 * theme custom scripts
*/

jQuery(document).ready(function ($) {
    var offset = document.body.clientWidth < 768 ? "80%" : "bottom-in-view";
    $(".menu .menu-btn").click(function () {
        $(".menu").toggleClass("menu-open");
    });

    $(document).click(function (event) {
        if (!$(event.target).closest('.menu').length) {
            $(".menu").removeClass("menu-open");
        }
    });

    $(".fade-container").waypoint({
        handler: function () {
            $(this.element).addClass("visible");
        },
        offset: offset
    });

    setTimeout(function () {
        $("#hero-arrow").effect("shake");
    }, 1000);
});
