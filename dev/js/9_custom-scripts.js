/*!
 * theme custom scripts
*/

jQuery(document).ready(function ($) {
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
        offset: "bottom-in-view"
    });

    setTimeout(function () {
        $("#hero-arrow").effect("shake");
    }, 1000);
});
