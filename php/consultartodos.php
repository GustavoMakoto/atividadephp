<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
              <a class="nav-link" href="../login.html">login</a>
            </li>
          </ul>
    </div>
 
<div class="container mt-5">
    <h2>Lista de Funcionários</h2>
<?php
require_once "conexao.php";


$query = "SELECT * FROM funcionarios";

$result = mysqli_query($conexao, $query);


if (!$result) {
    die('Erro na consulta: ' . mysqli_error($conexao));
}

echo '<table class="table table-striped">';
echo '<thead class="thead-dark"><tr><th>Nome</th><th>Cargo</th><th>Salário</th><th>Horas</th></tr></thead>';
echo '<tbody>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['nome'] . '</td>';
    echo '<td>' . $row['cargo'] . '</td>';
    echo '<td>' . $row['salario'] . '</td>';
    echo '<td>' . $row['horas'] . '</td>';
    echo '</tr>';
}
echo '</table>';

mysqli_close($conexao);
?>
</div>
   </body>
</html>