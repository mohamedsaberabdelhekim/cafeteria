let user = $(".admin-all-users .each-user");

user.each(function() {
  $(this).on("click", ".delete", function() {
    $(this)
      .parents(".each-user")
      .remove();
  });
});
