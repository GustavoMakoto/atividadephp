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
if (!isset($_SESSION['username'])) {
    header('Location: ../login.html');
    exit;
}
    require_once 'conexao.php';
    if ($_POST){
        $nome = $_POST["nome"];
        $horas = $_POST["horas"];
        $cargo = $_POST["cargo"];
        $salario = $_POST["salario"];
        $id = $_POST["id"];
        $query = "UPDATE funcionarios SET nome = '$nome', cargo = '$cargo', salario = $salario , horas = $horas WHERE id=$id";
        $sql = $conexao->query($query) or die(mysqli_error($conexao));
        if ($sql){
            echo "Dados atualizados com sucesso";
        }else {
            echo "ERRO";
        }
        $conexao->close();
    }

?>