<?php

    include_once "conexao.php";

    $codigo = filter_input(INPUT_GET, "codigo", FILTER_SANITIZE_SPECIAL_CHARS);
    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $valor = filter_input(INPUT_GET, "valor", FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "INSERT INTO produtos values (null, $nome, $valor)";


    
    $inserir = mysqli_query($link, $sql);
    if ($inserir) {
        echo "Salvo com sucesso!";
    } else {
        echo "Erro ao salvar";
    }

    mysqli_close();

?>