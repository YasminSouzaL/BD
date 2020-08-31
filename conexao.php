<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bdname= "projeto";

    //criar a conexão
    $conx = mysqli_connect($servidor, $usuario, $senha, $bdname);

    //texta 
    if(!$conx){
        echo "Falha na conexão";
    }
?>