<?php
session_start();
$nome = !empty($_SESSION['nome']) ? $_SESSION['nome'] : '-';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <a href="08_sessionadicionar.php">adicionar nome</a>
    <a href="08_sessionremover.php">remover nome</a>
    <h1>Nome: <?php echo $nome ?></h1>
</body>

</html>