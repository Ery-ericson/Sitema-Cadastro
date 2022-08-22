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
            <h1>Cadastro de Usuarios |Dev_Ericson da Piedade_|</h1>
            <hr>
            <br><br>

            <form method="POST" action="processa.php">
                <input type="submit" value="Salvar" class="btn">
                <input type="reset" value="Limpar" class="btn">
                <br><br>

                Nome <br>
                <input type="text" name="nome" maxlength="40" class="campo" required autofocus><br>
                Email <br>
                <input type="email" name="email" maxlength="50" class="campo" required><br>
                Telefone <br>
                <input type="number" name="telefone" maxlength="9" class="campo"><br>
                Profissao <br>
                <input type="text" name="profissao" maxlength="40" class="campo"><br>
            </form>
        </section>
    </div>
    <footer class="rodaPe">
        <h1>Sistema de Cadastro Prod. by : Eriquison da Piedade Dev_Junior</h1>
    </footer>
    
</body>
</html>