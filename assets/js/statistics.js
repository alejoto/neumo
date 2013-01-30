$("#graph").click(function(){
  var graph_type = $("#graph_type")[0].value;
  var url_graph = "../statistics/";

  if(graph_type == "combo") url_graph += "combo.php";
  else if(graph_type == "line_time_zoom") url_graph += "line_time_zoom.php";
  else if(graph_type == "spline") url_graph += "spline.php";
  else if(graph_type == "spline_dynamic") url_graph += "spline_dynamic.php";
  else{
    alert("Seleccione un tipo de grafico");
    return ;
  } 
  
  /*
    llamado ajax a un archivo pasandole la tabla y el tipo de grafica
    el retorna los valores que se van a graficar y que se le van a pasar 
    serializados a url_graph
  */

  $.post( url_graph ,{}, function(data) {
    $("#graph_area").html(data);
  });
});