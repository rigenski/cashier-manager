$(function () {
  // =============== STOCK ======================= //
  $("#stock-add").on("keyup", function () {
    const addstock = $("#stock-add").val();
    const oldstock = $("#stock-old").val();
    $("#stock-now").val(parseInt(addstock) + parseInt(oldstock));
  });

  $("#stock-now").on("keyup", function () {
    const nowstock = $("#stock-now").val();
    const oldstock = $("#stock-old").val();
    $("#stock-add").val(parseInt(nowstock) - parseInt(oldstock));
  });

  // ================== EDIT IMAGE ======================= //
  $("#image-product").on("change", function () {
    $("#label-image-product").html($("#image-product").val());
  });

  // ================== DATA TABLES ======================= //
  $("#table-data").DataTable();
});

// var data = 0;

// function plusCart(id) {
//   const value = document.querySelector(`.order-value${id}`).value;
// }

// function minCart(id) {
//   document.querySelector(`.order-val${id}`).innerHTML = --data;
// }
