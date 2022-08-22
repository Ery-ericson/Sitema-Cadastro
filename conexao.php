<?php
$hostname = "127.0.0.1";
$user = "Ericson";
$password ="Ericson942";
$database = "db_sistema_cadastro";

$conexao = mysqli_connect($hostname,$user,$password,$database);

if(!$conexao)
{
    echo "Falha na coneção com a Base de Dados";
}
/*
else
{
    echo "Conexão feita com a Base de Dados";

}
*/

?>