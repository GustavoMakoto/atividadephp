<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ../login.html');
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Seu código de cabeçalho aqui -->
</head>
<body>
    <p>Bem-vindo, <?php echo $username; ?>!</p>
    <!-- Restante do seu conteúdo HTML -->
</body>
</html>
