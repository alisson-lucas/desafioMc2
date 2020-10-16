<?php 

    $server = "localhost";
    $user = "root";
    $pass = "123456789";
    $bd = "mc2";

    if( $conn = mysqli_connect($server, $user, $pass, $bd)) {
        echo "conectado";
    } else
        echo "erro";

        function mensagem($texto, $tipo) {
            echo "<div class='alert alert-$tipo' role='alert'>
                Cadastrado com sucesso
            </div>";
        }
 ?>