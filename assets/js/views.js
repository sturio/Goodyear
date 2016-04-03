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

  $("#index").on("click", function(event)
  {
    event.preventDefault();
    location.reload();
  });
});
