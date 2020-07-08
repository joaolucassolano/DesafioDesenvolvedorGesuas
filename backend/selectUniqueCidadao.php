<?php

    include './includes/connection.php';
    include './includes/cidadao.php';
    include './includes/viewcidadao.php';

    $nis = $_POST["nis"];
    $cidadao = new ViewCidadao();
    $info = $cidadao->showUniqueCidadao($nis);
    if(!$info){
        $message= "Cadastro não encontrado!";
        echo "<script>window.location.href = '../frontend/?message=".$message."'</script>";
    }else{
        $message = "<b>Nome:</b> ". $info['nome'] . ", <b>NIS:</b> " . $info['nis'].".";
        echo "<script>window.location.href = '../frontend/?message=".$message."'</script>";
    }
?>