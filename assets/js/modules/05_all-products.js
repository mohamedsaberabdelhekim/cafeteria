let product = $(".admin-all-products .each-product");

product.each(function() {
  $(this).on("click", ".delete", function() {
    $(this)
      .parents(".each-product")
      .remove();
  });
});

// $(".admin-all-products .each-product").on("click", ".available", function() {
//   $(this).html($(this).html() === "unavailable" ? "available" : "unavailable");
// });
