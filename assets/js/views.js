$(document).ready(function () {
  $("#list").on("click", function(event)
  {
    event.preventDefault();
    $('#content').load("views/movelist.html");
  });

  $("#products").on("click", function(event)
  {
    event.preventDefault();
    $('#content').load("views/products.html");
  });

  $("#clients").on("click", function(event)
  {
    event.preventDefault();
    $('#content').load("views/clients.html");
  });

  $("#credit-collection").on("click", function(event)
  {
    event.preventDefault();
    $('#content').load("views/credit-collection.html");
  });

  $("#stock").on("click", function(event)
  {
    event.preventDefault();
    $('#content').load("views/edit-stock.html");
  });

  $("#users").on("click", function(event)
  {
    event.preventDefault();
    $('#content').load("views/users.html");
  });

  $("#quoter").on("click", function(event)
  {
    event.preventDefault();
    $('#content').load("views/quoter.html");
  });

  $("#items_input").on("click", function(event)
  {
    event.preventDefault();
    $('#content').load("views/input-products.html");
  });

  $("#list2").on("click", function(event)
  {
    event.preventDefault();
    $('#content').load("views/movelist.html");
  });

  $("#products2").on("click", function(event)
  {
    event.preventDefault();
    $('#content').load("views/products.html");
  });

  $("#clients2").on("click", function(event)
  {
    event.preventDefault();
    $('#content').load("views/clients.html");
  });

  $("#credit-collection2").on("click", function(event)
  {
    event.preventDefault();
    $('#content').load("views/credit-collection.html");
  });

  $("#stock2").on("click", function(event)
  {
    event.preventDefault();
    $('#content').load("views/edit-stock.html");
  });

  $("#users2").on("click", function(event)
  {
    event.preventDefault();
    $('#content').load("views/users.html");
  });

  $("#quoter2").on("click", function(event)
  {
    event.preventDefault();
    $('#content').load("views/quoter.html");
  });

  $("#items_input2").on("click", function(event)
  {
    event.preventDefault();
    $('#content').load("views/input-products.html");
  });

  $("#index").on("click", function(event)
  {
    event.preventDefault();
    location.reload();
  });
});
