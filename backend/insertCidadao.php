<?php

    include './includes/connection.php';
    include './includes/cidadao.php';
    include './includes/viewcidadao.php';

    $nome = $_POST["nome"];
    $cidadaos = new ViewCidadao();
    $info = $cidadaos->insertCidadao($nome);
    $message = "O cidadão " . $info['nome'] . " foi cadastrado com o NIS " . $info['nis'];
    echo "<script>alert('$message');</script>";
    echo "<script>window.location = '../frontend/';</script>";
?>