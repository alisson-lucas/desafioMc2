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

        include 'conexao.php';

        $id = $_GET['id'] ?? '';
        $sql = "SELECT * FROM tarefa WHERE cod_tarefa = $id";

        $dados = mysqli_query($conn, $sql);
        $linha = mysqli_fetch_assoc($dados);


    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Editar Tarefa</h1>   
                <form action="tarefas_script.php" method="POST">
                    <div class="form-group">
                        <label for="login">Tarefa</label>
                        <input type="text" class="form-control" name="titulo" value="<?php echo $linha['titulo']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="senha">Descrição</label>
                        <input type="text" class="form-control" name="descricao" value="<?php echo $linha['descricao']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="senha">Data de inicio</label>
                        <input type="text" class="form-control" name="data_inicio" value="<?php echo $linha['data_e_hora_inicio']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="senha">Data final</label>
                        <input type="text" class="form-control" name="data_final" value="<?php echo $linha['data_e_hora_termino']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="senha">Usuario</label>
                        <input type="text" class="form-control" name="usuario" value="<?php echo $linha['usuario']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="senha">Status</label>
                        <input type="text" class="form-control" name="status" value="<?php echo $linha['status']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Salvar alterações" >
                        <input type="hidden" name="id" value="<?php echo $linha['cod_tarefa']; ?>">
                        <a href="index.php" class="btn btn-primary">Voltar</a>
                    </div>
                    
                </form>
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