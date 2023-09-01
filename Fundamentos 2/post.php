<html>
<h2>Contato</h2>
<form action="" method="POST">
    <label>Nome:</label>
    <input type="text" name="nome" placeholder="Digite seu nome"><br><br>
    <label>Assunto:</label>
    <input type="text" name="assunto" placeholder="Digite o assunto"><br><br>
    <label>Mensagem:</label>
    <textarea name="mensagem" placeholder="Digite a mensagem" cols="25" rows="1"></textarea>
    <input type="submit" name="submit" value="Enviar">
</form>

<?php
if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    echo "NOME: $nome<br><br>";
    echo "ASSUNTO: $assunto<br><br>";
    echo "MENSAGEM: $mensagem<br><br>";
}
?>
</html>