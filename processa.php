<?php
    include_once("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $profissao = $_POST['profissao'];

    $sql = "insert into tb_usuarios 
    (nome,email,telefone,profissao)
    values
    ('$nome','$email','$telefone','$profissao')";  
    
    /*cadastrar os registros da base de dados */
    $salvar = mysqli_query($conexao,$sql);

    /* Verificar a quantidade de linhas afetadas*/
    $linhas = mysqli_affected_rows($conexao);
    mysqli_close($conexao);

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
            <h1>Confirmação de Cadastros</h1>
            <hr>
            <br><br>

            <?php

            if($linhas == 1)
            {
                print "Cadastro efetuado com sucesso!";
            }
            else
            {
                print "Cadastro NÃO efectuado! <br>
                Já existe um usuario com este e-mail";
            }
       
            ?>
        </section>
    </div>   
</body>
</html>