<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from tb_usuarios where profissao like '%$filtro%'";
/*Verificar a quantidade de ussuarios */
$consulta = mysqli_query($conexao, $sql);
/*Verificar a quantidade de linhas */
$registro = mysqli_num_rows($consulta);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sites de Cadastro">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Sistema de cadastro</title>
</head>
<body>
    <div class="container">
        <nav>
            <ul class="menu">
                <a href="index.php"><li>Cadastro</li></a>
                <a href="consultas.php"><li>Consultas</li></a>
                
            </ul>
        </nav>
        <section>
            <h1>Consultas</h1>
            <hr>
            <br><br>
            <form method="GET" action="" >
                Filtrar por Profissão: <input type="text" name="filtro" class="campo" required autofocus>
                <input type="submit" value="Pesquisar" class="btn">
            </form>

           
            <?php

            print " Resultado da pesquisa com a palavra <strong>$filtro</strong>";
            print "<br><br>";   
            print " $registro Registros encontrados! ";
            print "<br><br>";

            /*Laço de repetição dos registros */
            while($exibirRegistro = mysqli_fetch_array($consulta)){

                $Id = $exibirRegistro[0];
                $nome = $exibirRegistro[1];
                $email = $exibirRegistro[2];
                $telefone = $exibirRegistro[3];
                $profissao = $exibirRegistro[4];

                echo "<article> $Id <br> $nome <br> $email <br> $telefone <br> $profissao </article>";
                /*print "<article>";

                print "$Id <br>";
                print "$nome <br>";
                print "$email <br>";
                print "$telefone <br>";
                print "$profissao";

                print "</article>";
                */
  
            }

            mysqli_close($conexao);

            ?>

        </section>
    </div>
    
</body>
</html>