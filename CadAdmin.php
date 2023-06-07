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
    <form action="CadAdmin.php" method="post">

    <div class="form-group">
            <label class="form-label" for="name">Nome:</label>
            <input class="form-input" type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
        </div>

        <div class="form-group">
            <label class="form-label" for="name">Email:</label>
            <input class="logar" type="email" id="email" name="email" placeholder="Digite seu email"><br>
        </div>

        <div class="form-group">
            <label class="form-label" for="password">Senha:</label>
            <input class="form-input" type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
        </div>
             
        
    <input class="form-submit" type="submit" id="button" name="submeter"  value="Entrar">
</form>     

    </form>
</div>
<a href="estatisticas.php">Voltar</a>
<?php

if(isset($_POST['submeter'])){ //se houve um click no botao submit
    include_once('conectar.php'); //acesso ao banco de dados

$email = $_POST['email'];   //pegando do formulario 'name'
$senha = $_POST['senha'];
$nome = $_POST['nome'];


 // Verificar se o nome da refeição já existe no banco de dados
 $verificar = mysqli_query($mysqli, "SELECT * FROM administrador WHERE email = '$email'");
 if(mysqli_num_rows($verificar) > 0) {
     echo "Este usuario já foi cadastrado. Por favor, insira um email diferente.";
 } else {
     $clientes = mysqli_query($mysqli, "INSERT INTO administrador(email, senha, nome)
     VALUES('$email', '$senha', '$nome')");

     if($clientes) {
         echo "Administrador cadastrado com sucesso!";
     } else {
         echo "Erro ao cadastrar Administrador. Por favor, tente novamente.";
     }
 }

} 

 ?>

</body>
</html>
