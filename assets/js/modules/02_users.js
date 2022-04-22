//* ////////////////////////////////////////////////////////////////////////
//! 02_user
let priceArr = [];
function getSum(total, num) {
  return total + num;
}

// select order
$(".all-products .products .each-order").on("click", function() {
  let itemPrice = parseInt(
      $(this)
        .find("input")
        .val()
    ),
    itemName = $(this)
      .find("input")
      .attr("name");

  let choosenItems = $(".choosen-items ul"),
    newItem = `<li class="hidden"> 
                <div class='item-info'> 
                  <h5> ${itemName} </h5> 
                  <div class='item-counter'>
                    <span>1</span>
                    <i class='add fa fa-plus-circle'></i>
                    <i class='sub fa fa-minus-circle'></i>
                  </div>
                  <div class="price">
                    <span>EGP <span>${itemPrice}</span></span>
                    <i class="remove fa fa-trash"></i>
                  </div>
                  <input type="text" name="${itemName}" value="${itemPrice}" hidden />
                  <span class="itemPrice hidden">${itemPrice}</span>
                </div>
              </li>`;
  choosenItems
    .append(newItem)
    .find("li.hidden")
    .fadeIn(400);
  let totalPrice = $(".orders-panel .total-price span span");
  priceArr.push(itemPrice);
  let total = priceArr.reduce(getSum);
  priceArr = [];
  priceArr.push(total);
  totalPrice.text(total);
  $(".orders-panel .total-price")
    .find("input")
    .attr("value", total);
  console.log(priceArr);
});

// add one item
$(".choosen-items").on("click", ".item-counter .add", function() {
  let itemPrice = parseInt(
    $(this)
      .parents(".item-info")
      .find(".itemPrice")
      .html()
  );
  let itemCounter = $(this)
    .parent()
    .find("span")
    .html();
  let newPrice = parseInt(
    $(this)
      .parents(".item-info")
      .find(".price span span")
      .text()
  );
  let totalPrice = $(".orders-panel .total-price span span");
  itemCounter++;
  newPrice = newPrice + itemPrice;
  $(this)
    .parent()
    .find("span")
    .text(itemCounter);
  $(this)
    .parents(".item-info")
    .find(".price span span")
    .text(newPrice);
  $(this)
    .parents(".item-info")
    .find("input")
    .attr("value", newPrice);
  priceArr.push(itemPrice);
  let total = priceArr.reduce(getSum);
  priceArr = [];
  priceArr.push(total);
  totalPrice.text(total);
  $(".orders-panel .total-price")
    .find("input")
    .attr("value", total);
  console.log(priceArr);
});

// subtract one item
$(".choosen-items").on("click", ".item-counter .sub", function() {
  let itemPrice = parseInt(
    $(this)
      .parents(".item-info")
      .find(".itemPrice")
      .html()
  );
  let itemCounter = $(this)
    .parent()
    .find("span")
    .html();
  let newPrice = parseInt(
    $(this)
      .parents(".item-info")
      .find(".price span span")
      .text()
  );
  let totalPrice = $(".orders-panel .total-price span span");
  if (itemCounter <= 0) {
    newPrice = 0;
    itemCounter = 0;
  } else {
    itemCounter--;
    newPrice = newPrice - itemPrice;
    $(this)
      .parent()
      .find("span")
      .text(itemCounter);
    $(this)
      .parents(".item-info")
      .find(".price span span")
      .text(newPrice);
    $(this)
      .parents(".item-info")
      .find("input")
      .attr("value", newPrice);
    // priceArr.splice(priceArr.indexOf(itemPrice), 1);
    let total = priceArr[0];
    total = total - itemPrice;
    // total = priceArr.reduce(getSum, 0);
    priceArr = [];
    priceArr.push(total);
    totalPrice.text(total);
    $(".orders-panel .total-price")
      .find("input")
      .attr("value", total);
    console.log(priceArr);
  }
});

// remove selected item
$(".choosen-items ").on("click", ".price .remove", function() {
  let itemTotalPrice = $(this)
    .parents(".item-info")
    .find("input")
    .val();
  let totalPriceElem = $(".orders-panel .total-price span span");
  let totalPrice = priceArr[0];
  // let totalPrice = parseInt(totalPriceElem.html());
  totalPrice = totalPrice - itemTotalPrice;
  priceArr = [];
  priceArr.push(totalPrice);
  totalPriceElem.text(totalPrice);
  // console.log(totalPrice);
  console.log(priceArr);
  $(".orders-panel .total-price")
    .find("input")
    .attr("value", totalPrice);
  $(this)
    .parents("li")
    .remove();
});

//* ////////////////////////////////////////////////////////////////////////
