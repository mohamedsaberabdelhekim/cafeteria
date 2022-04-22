let orderRow = $(".my-orders .user-orders");
let order = $(".my-orders .user-orders .order");
// let userData = $(".checks .user-checks ");

orderRow.each(function() {
  $(this).on("click", ".order", function() {
    $(this)
      .toggleClass("custom-shadow")
      .next()
      .fadeToggle("700");

    $(this)
      .find("i")
      .toggleClass("fa-minus-square fa-plus-square", 1000);
  });
});

order.each(function() {
  $(this).on("click", ".cancel", function() {
    $(this)
      .parents(".order")
      .next()
      .remove();
    $(this)
      .parents(".order")
      .remove();
  });
});
