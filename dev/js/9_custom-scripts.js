/*!
 * theme custom scripts
*/

jQuery(document).ready(function ($) {
    $(".menu .menu-btn").click(function () {
        console.log("boom")
        $(".menu").toggleClass("menu-open");
    });
});
