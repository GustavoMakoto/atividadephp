
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
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

    <div class="form">
        <?php
            require_once "conexao.php";
            session_start();
            if (isset($_POST["id"])) {
                $id = $_POST["id"];
                

                $query = "SELECT * FROM funcionarios WHERE id='$id'";
                
                $sql = $conexao->query($query) or die(mysqli_error($conexao));
                
                if ($sql->num_rows > 0) {
                    $funcionario = $sql->fetch_assoc();
                    $nome = $funcionario["nome"];
                    $cargo = $funcionario["cargo"];
                    $salario = $funcionario["salario"];
                    $horas = $funcionario["horas"];
                } else {
                    echo '<p class="text-danger">Funcionário não encontrado.</p>';
                    exit;
                }
            } else {
                echo '<p class="text-danger">ID não fornecido.</p>';
                exit;
            }
            
        ?>

        <form action="update.php" method="post">
            <div class="form-group">
              <label>Nome do funcionário</label>
              <input type="text" class="form-control" name="nome" value="<?php echo $nome; ?>">
            </div>
            <div class="form-group">
                <label>Cargo</label>
                <input type="text" class="form-control" name="cargo" value="<?php echo $cargo; ?>">
            </div>
            <div class="form-group">
                <label>Salário</label>
                <input type="text" class="form-control" name="salario" value="<?php echo $salario; ?>">
            </div>
            <div class="form-group">
                <label>Horas semanais</label>
                <input type="number" class="form-control" name="horas" value="<?php echo $horas; ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
        <a href="../promover.html">
        <button type="button">Promover</button>
    </a>

    </div>
</body>
</html>