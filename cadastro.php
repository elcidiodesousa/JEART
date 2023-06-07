<!DOCTYPE html>
<html>
<head>
    <title>JE ART - Loja de venda de quadros</title>
    <link rel="shortcut icon" href="img/logotipo.jpg" type="image/x-icon">
   
    <style>
        .form-container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 100px;
        }
        h2{
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .form-input {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        
        .form-submit {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            background-color: #4CAF50;
            color: #fff;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }
        
        /* Animação */
        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateY(50%);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animated {
            animation: slideIn 0.5s ease-in-out;
        }
        
        .success {
            color: #4CAF50;
            background-color: #e7f4e7;
            border: 1px solid #4CAF50;
            padding: 10px;
            margin-bottom: 10px;
        }
        
        .failure {
            color: #f44336;
            background-color: #fce7e7;
            border: 1px solid #f44336;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="form-container animated">
    <h2>Cadastro</h2>
    <form action="cadastro.php" method="post">
        <div class="form-group">
            <label class="form-label" for="name">Nome:</label>
            <input class="form-input" type="text" id="nome" name="nome" placeholder="Nome Completo" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="email">Email:</label>
            <input class="form-input" type="email" id="email" name="email" placeholder="Digite seu email" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="password">Senha:</label>
            <input class="form-input" type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="sexo">Sexo:</label>
            <input type="radio" id="feminino" name="sexo" value="F" required>Feminino
            <input type="radio" id="masculino" name="sexo" value="M" required>Masculino 
        </div>
                  
        <input class="form-submit" type="submit" id="button" name="submit" value="CADASTRAR">
    </form>
    <a href="Index.html">Voltar</a>
</div>

<!-- Configuração do PHP -->

<?php
if(isset($_POST['submit'])){ //se houve um clique no botão submit
    include_once('conectar.php'); //acesso ao banco de dados

    $nome = $_POST['nome'];   //pegando do formulário 'name'
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];

    // Verificar se todos os campos estão preenchidos
    if(empty($nome) || empty($email) || empty($senha) || empty($sexo)){
        echo '<div class="failure">Por favor, preencha todos os campos.</div>';
    } else {
        // Verificar se o email já está cadastrado
        $check_email = mysqli_query($mysqli, "SELECT * FROM cadastro_clientes WHERE email_cliente = '$email'");
        if(mysqli_num_rows($check_email) > 0){
            echo '<div class="failure">Este email já está cadastrado.</div>';
        } else {
            // Realizar o cadastro
            $clientes = mysqli_query($mysqli, "INSERT INTO cadastro_clientes(nome_cliente, email_cliente, senha_cliente, sexo_cliente)
            VALUES('$nome', '$email', '$senha', '$sexo')");

            if($clientes) {
                echo '<div class="success">Cadastrado com sucesso!</div>';
            } else {
                echo '<div class="failure">Falha ao cadastrar.</div>';
            }
        }
    }
}
?>

</body>
</html>
