<?php

//Objetivo criar uma calculadora de imc e falar se a passoa está acima do peso, abaixo do peso ou no peso ideal.

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="nome">Peso:</label>
        <input type="text" name="peso" id="peso">
        <label for="nome">Altura:</label>
        <input type="text" name="altura" id="altura">
        <input type="submit" value="Calcular">
    </form>

    <div class="resposta">
        <?php echo "A resposta vem aqui:"; ?>
    </div>
</body>
</html>