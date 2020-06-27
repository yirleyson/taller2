<?php

include('baseDatos.php');

//Validar que se hizo click en el boton de eliminar datos

if(isset($_POST["btnEliminar"])){

//crear objeto de la clase basedatos
$operacionbaseD=new BaseDatos();

// recibir información para saber a quien se va a eliminar

$nombre=$_POST["EliminarUsuario"];

//consulta para eliminar datos

$consulta="DELETE FROM usuarios WHERE nombre='$nombre'";

//usar el metodo alterarBaseDatos para ejecutar consulta

$resultado=$operacionbaseD->alterarBaseDatos($consulta);

}else{
    echo("No se hizo click");
}

?>