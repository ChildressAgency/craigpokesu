/*!
 * theme custom scripts
*/

jQuery(document).ready(function ($) {
    $(".menu .menu-btn").click(function () {
        $(".menu").toggleClass("menu-open");
    });

    $(".fade-container").waypoint({
        handler: function () {
            $(this.element).addClass("visible");
        },
        offset: "bottom-in-view"
    })
});
