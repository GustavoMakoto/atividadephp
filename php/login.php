<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Funcionarios</title>
    </head>
    <body>
    <footer class="bg-dark text-white text-center p-3">
    <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" href="../index.html">Cadastrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../atualizar.html">atualizar</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../conferir.html">Conferir</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../login.html">login</a>
            </li>
          </ul>
        <p class="mt-2 mb-0">Trabalho e mais trabalho</p>
    </footer>
    <div class="bg-dark text-white">
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" href="../index.html">Cadastrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../atualizar.html">atualizar</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../conferir.html">Conferir</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../login.html">login</a>
            </li>
          </ul>
    </div>
    </body>
</html>
<?php
require_once "conexao.php"; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "SELECT * FROM adm WHERE usuario = '" . mysqli_real_escape_string($conexao, $username) . "'";


    $result = mysqli_query($conexao, $query);

    if ($result) {
        $user = mysqli_fetch_assoc($result);

        if ($user && $password === $user['senha']) {
            session_start();
            $_SESSION['username'] = $username;
            header('Location: ../index.html');
        } else {
            echo 'Usuário ou senha inválidos';
        }
    }
}
?>