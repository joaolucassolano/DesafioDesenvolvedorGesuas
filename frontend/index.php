<?php
    if(isset($_GET['message'])) {
        $message = $_GET['message'];
    } else {
        $message = '';
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Consulta de NIS</title>

    <link rel="stylesheet" href="./styles/global.css">
    
</head>
<body>
    <div class="container">
        <h1 class="dividing header">Cadastro e Consulta de Cidadãos</h2>
        <div class="grid">
            <div class="row">
                <div class="column">
                    <h2>Cadastro</h2>
                    <p>Cadastre um cidadão informando seu nome.</p>
                    <form method='POST' action='../backend/insertCidadao.php'>
                        <div class="field">
                            <label for="nome">Nome:</label>
                            <div class="input">
                                <input type="text" id="nome" name='nome' placeholder="Informe o nome ..." require>
                            </div>
                        </div>
                        <button type='submit' class='button'>Cadastrar</button>
                    </form>
                </div>
                <div class="column">
                    <h2>Consultar</h2>
                    <p>Consulte o registro de um cidadão informando seu NIS.</p>
                    <form method='POST' action='../backend/selectUniqueCidadao.php'>
                        <div class="field">
                            <label for="nis">NIS:</label>
                            <div class="input">
                                <input type="text" id="nis" name='nis' placeholder="Informe o NIS ..." require>
                            </div>
                        </div>
                        <button type='submit' class='button'>Consultar</button>

                        <p><?php echo $message?></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>