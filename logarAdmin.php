<?php

session_start(); //inicia uma sessao

//Verificar se houve uma accao na pagina Entrar

if(isset($_POST['submit']) && !empty($_POST['email']) &&  !empty($_POST['senha'])){
//nao estao vazios
//conectar com o banco de dados

include_once('conectar.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

//verificar a tabela do banco de dados

$sql = "SELECT * FROM administrador WHERE email = '$email' and senha = '$senha' ";

$verificar = $mysqli -> query($sql);

//verificar se o registro e valido
if(mysqli_num_rows($verificar)<1){

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location:Index.html');
}else{

    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('Location:estatisticas.php');
}


}else{
    header('Location:Index.html');
}


?>