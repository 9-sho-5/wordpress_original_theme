//「開く」がクリックされた場合
$(document).on("click", ".ham_menu", function () {
  if ($("body").css("overflow-y") == "auto") {
    $('.ham_menu[data-state="inactive"]').attr("data-state", "active");
    $(".window-fixed").css("opacity", "1");
    $(".window-fixed").css("pointer-events", "all");
    $(".window-fixed").css("transform", "translateX(0%)");
    $("body").css("overflow-y", "hidden"); // 本文の縦スクロールを無効s
  } else if ($("body").css("overflow-y") == "hidden") {
    $('.ham_menu[data-state="active"]').attr("data-state", "inactive"); // モーダルウィンドウを非表示
    $(".window-fixed").css("opacity", "0");
    $(".window-fixed").css("pointer-events", "none");
    $(".window-fixed").css("transform", "translateX(100%)");
    $("body").css("overflow-y", "auto"); // 本文の縦スクロールを有効
  }
});
