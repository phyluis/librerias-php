<?php
 
 /*
  * TEST DEL MAQUETADOR
  */
  
include "maquetador.php";
include "funciones.php";


/** testeando maquetador_script **/

/*  
maquetador_script ( "añadir", "meta", "keys", "a, b,c");
maquetador_script ( "añadir", "script", "googleglub", "http://www.google.com/glub.js");
maquetador_script ( "añadir", "js", "verifica-fechas", "$( funcion(){ $('input.fecha').datepicker()})");  
  
echo  maquetador_script ( "genera", "todos" );
*/

echo maquetador_enlace( array (
 "texto"=>"enlace a",
 "pagina" =>"gestion.php",
 "controlador"=>"test",
 "accion"=>"probar",
 "parametros" => array ("pagina"=>1, "orden"=>"asc"),
 "adicional"  => array("id"=>3, "class"=>"hola" ) )),"\n";
  
echo maquetador_enlace("texto","cont","accion","id","li","class='li'","p=2"); 
   
  