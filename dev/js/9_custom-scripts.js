/*!
 * theme custom scripts
*/

jQuery(document).ready(function ($) {
    const offset = document.body.clientWidth < 768 ? "50%" : "bottom-in-view";
    $(".menu .menu-header").click(function () {
        $(".menu").toggleClass("menu-open");
    });

    $(document).click(function (event) {
        if (!$(event.target).closest('.menu').length) {
            $(".menu").removeClass("menu-open");
        }
    });

    $(".menu a.nav-link:not(.dropdown-toggle), .menu a.dropdown-item").click(function () {
        $(".menu").removeClass("menu-open");
    });

    $(".fade-container:not(.hours .fade-container)").waypoint({
        handler: function () {
            $(this.element).addClass("visible");
        },
        offset
    });

    $(".hours .fade-container").waypoint({
        handler: function () {
            $(this.element).addClass("visible");
        },
        offset: "bottom-in-view"
    });

    setTimeout(function () {
        $("#hero-arrow").effect("shake");
    }, 1000);
});
