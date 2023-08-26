<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de compras</title>
</head>
<body>
    <?php $lista = ['Arroz', 'Carne', 'cebola', 'açafrão']; ?>
    <h1>Lista de Compras</h1>

    <ul>
        <?php foreach ($lista as $i):?>
            <li> <?= $i ?> </li>
        <?php endforeach ?>
        
    </ul>
</body>
</html>

<?php # Como iniciar servidor: php -S localhost:8000 ?>