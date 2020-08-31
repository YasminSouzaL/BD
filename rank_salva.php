<?php

    include_once("conexao_rank.php");
    
    $nome = $_POST["nome"];
    $pts = $_POST["pontos"];

    $result_msg_contato = "INSERT INTO ranking(nome, pts) VALUES ('$nome', '$pts')";

    $resultado_msg_contato= mysqli_query($conx, $result_msg_contato);

    
    
?>