/**
 * Footer Slide Toggle
 */
$(document).on("click", ".parent-link", function () {
    $(this).next().slideToggle("open")
    $(this).toggleClass("open")
});

function resizeWindow() {
    var windowWidth = window.innerWidth;

    // widnowサイズが1024px(md)を超えた際にsub-link-wrapを閉じるようにする
    if (windowWidth >= 1024) {
        $('.sub-link-wrap').css("display", "block")
    } else {
        $('.parent-link').removeClass("open");
        $('.sub-link-wrap').css("display", "none")
    }
}
window.onresize = resizeWindow;