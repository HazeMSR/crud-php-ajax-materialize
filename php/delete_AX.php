<?php
    include("configBD.php");
    include("getPosts.php");

    $curp = $_POST["curp"]; //Parametro que se paso atraves de crud.js en .eliminar()
    
    $sqlDel = "DELETE FROM alumno WHERE curp = '$curp'";
    
    //Verifica si hubo un error al eliminar de la tabla alumno
    if (!mysqli_query($conexion, $sqlDel)) {
        echo("Error description: " . mysqli_error($con));
    }
    else{//Se elimino exitosamente
        
        $sqlDel = "DELETE FROM usuario WHERE usuario = '$curp'";
    
        //Verifica si hubo un error al eliminar de la tabla usuario
        if (!mysqli_query($conexion, $sqlDel)) {
            echo("Error description: " . mysqli_error($con));
        }
        else{//Se elimino exitosamente
            echo 1;
        }
    }




?>