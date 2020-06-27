<?php

include('baseDatos.php');


//Validar que se hizo click en el boton de enviar datos
if(isset($_POST["btnEnviar"])){
   
    //recibir los datos a enviar
    $nombre=$_POST["nombreUsuario"];
    $email=$_POST["emailUsuario"];
    $password=$_POST["passwordUsuario"];
    
    //crear un objeto del tipo base datos (se debe crear una variable)
    
    $operacionbaseD=new BaseDatos();
   

    //consulta para agregar datos
    
    $consulta="INSERT INTO usuarios( nombre, correo, password) VALUES ('$nombre','$email','$password')";
    
    //usar el metodo alterarBaseDatos para ejecutar consulta. Se utiliza el objeto del primer paso
    
    $resultado=$operacionbaseD->alterarBaseDatos($consulta);

    // verificar que se escribieran los datos
    if($resultado){
        echo("<br>");
        echo("Se han agregado con exito los datos a la base de datos");
        echo("<br>");
    }else{
        die("Error");
    }


}else{
    echo("No debería estar acá");
}






?>