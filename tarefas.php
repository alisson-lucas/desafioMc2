<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Cadastro</title>
  </head>
  <body>
  <?php 

    $pesquisa = $_POST['busca'] ?? '';
    
     
    include "conexao.php";

    $sql = "SELECT * FROM tarefa WHERE usuario LIKE '%$pesquisa%'";
    

    $dados = mysqli_query($conn, $sql);

    // while ( $linha = mysqli_fetch_assoc($dados)) {

        
    //     foreach($linha as $key => $value) {
    //         echo "$key: $value<br>";
    //     }
    // };
    

  ?>
    <div class="container">
        <div class="row">
            <div class="col">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Tarefas</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Principais<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Criar nova</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0" action="tarefas.php" method="POST">
                        <input class="form-control mr-sm-2" type="search" placeholder="Tarefa" name="busca">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </div>
            </nav>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Tarefa</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Data de inicio</th>
                        <th scope="col">Data final</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 

                        while ( $linha = mysqli_fetch_assoc($dados)) {
                            $cod_tarefa = $linha['cod_tarefa'];
                            $tarefa = $linha['titulo'];
                            $descricao = $linha['descricao'];
                            $datainicio = $linha['data_e_hora_inicio'];
                            $datatermino = $linha['data_e_hora_termino'];
                            $usuario = $linha['usuario'];
                            $status = $linha['status'];
                            
                            echo "<tr>
                                    <th scope='row'>$tarefa</th>
                                    <td>$descricao</td>
                                    <td>$datainicio</td>
                                    <td>$datatermino</td>
                                    <td>$usuario</td>
                                    <td>$status</td>
                                    <td width=150px><a href='editarTarefas.php?id=$cod_tarefa' class='btn btn-success btn-sm'>Editar</a>
                                    <a href='excluirTarefa.php' class='btn btn-danger btn-sm'>Excluir</a></td>
                                </tr>";
                        }
                    ?>
                </tbody>
            </table>
                <a href="index.php" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>