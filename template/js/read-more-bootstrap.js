$(document).ready(function(){
  $("#collapseExample").on("hide.bs.collapse", function(){
    $(".btn").html('<span class="glyphicon glyphicon-collapse-down"></span> Подробно');
  });
  $("#collapseExample").on("show.bs.collapse", function(){
    $(".btn").html('<span class="glyphicon glyphicon-collapse-up"></span> Кратко');
  });
});
