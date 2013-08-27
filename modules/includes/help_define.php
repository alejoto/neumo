<?php
$link = $_SERVER['REQUEST_URI'];
$img1 = "required.PNG";
$img2 = "save.gif";
$img3 = "popup.gif";
$img4 = "tooltip.gif";
$img5 = "date.gif";

if(strpos($link, "myaccount") != false){
	$route = "../../assets/images/help/";	
}
else{
	$route = "assets/images/help/";
}


$modal = '<p>Los campos requeridos se mostraran con fondo azul como el siguiente campo</p>
    	<img alt="" src="'.$route.$img1.'">
		<hr>    
    	<p>El boton guardar sera visible cuando llene todos los campos obligatorios (con fondo azul) del formulario</p>
    	<img alt="" src="'.$route.$img2.'">
    	<hr>
    	<p>Algunos campos apareceran cuando seleccione una opcion determinada, porfavor llene estos campos antes de guardar el formulario</p>
    	<img alt="" src="'.$route.$img3.'">
    	<hr>
    	<p>Algunos campos cuyo valor ingresado no sea el correcto mostraran un mensaje pidiendo el ingreso de datos de la forma requerida</p>
    	<img alt="" src="'.$route.$img4.'">
    	<hr>
      	<p>Los campos de fecha pediran primero el dia, a medida que llene el campo correctamente el sistema le pedira ingresar el mes y el año en el orden respectivo</p>
      	<img alt="" src="'.$route.$img5.'">
      	<hr>
    	<p>El sistema le pedira un documento de identidad del paciente, si el paciente existe mostrara su ficha m&eacute;dica y la opcion para ingresar datos de dicho paciente, si el paciente es nuevo le pedira la informaci&iacute;n necesaria para registrarlo</p>
    	<hr>
    	<p>Algunos campos restringen el uso de letras o numeros, e inclusive la cantidad de letras o numeros que se pueden ingresar. Por ejemplo la fecha solo acepta numeros y posee restriccion de caracteres</p>';

echo $modal;
?>