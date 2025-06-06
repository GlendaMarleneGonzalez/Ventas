<?php

    $usuario = $_REQUEST['usuario'];
    $clave = $_REQUEST['clave'];

    if ($usuario == "administrador"){
        if ($clave == '123'){
            echo "usuario VALIDO. Puede continuar";
        }
        else{
            echo " Clave incorrecta. ";
        }
    }
    else {
        echo "Usuario no valido. ";
    }

?>