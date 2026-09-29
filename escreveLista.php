<?php 
    $nome = $_GET['nome'] . ".md";
    $tarefa = $_GET['tarefa'];

    $arquivo = fopen($nome, "a");
    fwrite($arquivo, ". " . $tarefa . "\n");



?>