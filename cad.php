<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <head>
        <h1> Resultado do processamento</h1>
    </head>
    <main>
        <?php
        $n = $_GET ["nome"];
        $n = $_GET ["sobrenome"];
        echo '<p> É um prazer te conhecer, <strong> $n $s</strong>! Este é meu site;'
        ?>
        <p> <a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    </main>
</body>
</html>