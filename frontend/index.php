<?php
    if(isset($_GET['message'])) {
        $message = $_GET['message'];
    } else {
        $message = '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Document</title>
    
</head>
<body>
    <form method='POST' action='../backend/insertCidadao.php'>
        <input type="text" id="nome" name='nome' placeholder="Nome ...">
        <input type=submit></input>
    </form>

    <br> 

    <form method='POST' action='../backend/selectUniqueCidadao.php'>
        <input type="text" id="nis" name='nis' placeholder="NIS ...">
        <input type=submit></input>
        <p><?php echo $message?></p>
    </form>    
</body>
</html>