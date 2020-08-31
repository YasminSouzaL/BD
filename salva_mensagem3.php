<?php
    include_once("conexao_alunos.php");

    $nome = $_POST['nome'];
    $escola = $_POST['escola'];
    $curso = $_POST['curso'];
    $ano = $_POST['ano'];

    $result_msg_contato = "insert into professor (nome, escola,  curso, ano ) VALUES ('$nome', '$escola', '$curso', '$ano')";

    $resultado_msg_contato= mysqli_query($conx, $result_msg_contato);
    
    mysqli_close($conx);


    
?>
