let userRow = $(".checks .user-checks");
let userData = $(".checks .user-checks ");
console.log(userData);

userRow.each(function() {
  $(this).on("click", ".user", function() {
    $(this)
      .toggleClass("custom-shadow")
      .next()
      .fadeToggle("700");
    $(this)
      .find("i")
      .toggleClass("fa-minus-square fa-plus-square", 1000);
  });
});

userData.each(function() {
  $(this).on("click", ".user-data", function() {
    $(this)
      .toggleClass("custom-shadow")
      .next()
      .fadeToggle("700");
    $(this)
      .find("i")
      .toggleClass("fa-minus-square fa-plus-square", 1000);
  });
});
