<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Editar Tarefa</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <? php 
            include "conexao.php"; 

                $id = $_POST['id'];
                $cod_tarefa = $_POST['cod_tarefa'];
                $tarefa = $_POST['titulo'];
                $descricao = $_POST['descricao'];
                $datainicio = $_POST['data_e_hora_inicio'];
                $datatermino = $_POST['data_e_hora_termino'];
                $usuario = $_POST['usuario'];
                $status = $_POST['status'];


                $sql = "DELETE FROM `tarefa` WHERE `cod_tarefa` = $id";

                if (mysqli_query($conn, $sql)) {
                    mensagem("Alterado com sucesso",'success');
                }else
                mensagem("Não alterado",'danger');
            ?>
            <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>