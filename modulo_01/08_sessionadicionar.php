<?php
session_start();
$_SESSION['nome'] = 'Mario';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="08_sessionindex.php">voltar index</a>
    <h1>Nome adicionado com sucesso!</h1>
</body>

</html>