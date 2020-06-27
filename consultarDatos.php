<?php

include('baseDatos.php');

//Validar que se hizo click en el boton de consultar datos
if(isset($_POST["btnBuscar"])){

    //crear objeto de la clase basedatos
    $operacionbaseD=new BaseDatos();

    // recibir información para saber a quien se busca
  
    $nombre=$_POST["BuscarUsuario"];
     
    //consulta para agregar datos
    $consulta="SELECT nombre, correo, password FROM usuarios WHERE nombre='$nombre'";

    //usar el metodo consultarenbasedatos para ejecutar consulta
    $resultado=$operacionbaseD->consultarEnBaseDatos($consulta);

    //impirimir resultado
    echo("<br>");
    print_r(json_encode ($resultado));

}else{
 echo("No se hizo click");
}









?>