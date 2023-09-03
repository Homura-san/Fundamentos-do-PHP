<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Tabela de livros</title>
</head>
<body>
<?php $arquivo = fopen('livros.csv', 'r'); ?>

<table class="table table-dark table-striped-columns">
    <?php while($linha = fgetcsv($arquivo, 0, ';')): ?>
        <tr>
            <?php foreach($linha as $celula): ?>
                <td><?= $celula ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endwhile; ?>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>

<!-- while($linha = fgetcsv($arquivo, 0, ';')){
    var_dump($linha);
    exit();
} -->