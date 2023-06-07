<?php
$user = 'root';
$password = 'elcidiosousa84'; 
$database = 'bd_jeart'; 
$port = 33068; 
$mysqli = new mysqli('127.0.0.1', $user, $password, $database, $port);

if ($mysqli->connect_error) {
    die('Erro na conexão (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

// Iniciar uma sessão
session_start();

if (!isset($_SESSION['email_cliente']) || !isset($_SESSION['senha_cliente'])) {
    unset($_SESSION['email_cliente']);
    unset($_SESSION['senha_cliente']);
    header('Location: entrar.php');
} else {
    // Criar uma variável de acesso
    $email_cliente = $_SESSION['email_cliente'];

    // Consultar o banco de dados para obter o nome do cliente
    $sql = "SELECT nome_cliente FROM cadastro_clientes WHERE email_cliente = '$email_cliente'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nome_cliente = $row['nome_cliente'];
    }
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JE ART - Loja de venda de quadros</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/logotipo.jpg" type="image/x-icon">


    <style>
        /* Estilos básicos */
        body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
          background-color: rgba(0, 0, 0, 0.4);
        }
        .container {
      width: 500px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f2f2f2;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    h1 {
      color: blue;
      text-align: center;
    }

    form {
      margin-top: 20px;
    }

    label {
      font-weight: bold;
    }

    input[type="text"],
    input[type="date"],
    input[type="time"],
    input[type="number"],
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      background-color: blue;
      color: #fff;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: darkblue;
    }
        .navbar {
          background-color: white;
          overflow: hidden;
        }
    
        .navbar a {
          float: left;
          display: block;
          color: #333;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }
    
        .navbar a:hover {
          background-color: #ddd;
        }
    
        /* Estilos para o dropdown */
        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }
    
        .dropdown:hover .dropdown-content {
          display: block;
        }
    
        /* Estilos adicionais para dropdown vertical */
        .dropdown-content a {
          display: block;
          padding: 10px;
        }
        .popup {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: none;
  justify-content: center;
  align-items: center;
  z-index: 9999;
}

.popup-content {
  background-color: #fff;
  padding: 20px;
  max-width: 800px;
  max-height: 90%;
  overflow-y: auto;
  border-radius: 5px;
}

.close-button {
  display: block;
  text-align: center;
  margin-top: 10px;
}

.close-button:hover {
  text-decoration: underline;
  cursor: pointer;
}
.overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  backdrop-filter: blur(5px);
  display: flex;
  align-items: center;
  justify-content: center;
}

.message {
  background-color: white;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}


        .carrinho{
  
  margin-left: 1200px;
}

.boxes{
  position: absolute;
top: 130px;
left: 1070px;
color: white;
background-color: gray;
}

.p4{
  color: white;
}
      </style>
  </head>
<body>
<div class="tab">
    <div style="background-color: black; height: 110px; width:100%;"> 
        <img class="logo" src="img/JEART.jpg" alt="" >

        <div class="JEART">
            <div class="colorful-text">
                <span>J</span>
                <span>E</span>
                <span>A</span>
                <span>R</span>
                <span>T</span>
              </div>
        </div>
      </div>

    <div class="navbar">
        <a href="Quadros.php">Quadros</a>
        <div class="dropdown">
          <a href="Categoria.php">Categoria &#9662;</a>
          <div class="dropdown-content">
            <a href="Quadros_animais.php">Animais</a>
            <a href="mocambicanos.php">Quadros Mocambicanos</a>
          </div>
          <a href="Index.html">Home</a>
        </div>
        <div class= "carrinho">
        <a href="#" onclick="openPopup();"><img src="img/th (15).jpg" alt="Suas Compras" width="30px" height="30px"></a>

<div id="popup" class="popup">
  <div class="popup-content">
  <div class="container">
    <h1>Tela de Confirmação</h1>
    <form action="Inicial.php" method="post">
      <input type="text" id="numero" name="numero" placeholder="Digite o seu número de celular" required><br>
      <input type="text" id="nome" name="nome" placeholder="Digite o seu nome completo" required><br>
      <input type="text" id="endereco" name="endereco" placeholder="Qual é o seu endereço de entrega?" required><br>
      <label for="data" class="dd">Data:</label>
      <input type="date" id="data" name="data" required><br>
      <label for="hora">Hora:</label><br>
      <input type="time" id="hora" name="hora" required><br>
      <label for="totalSelecionados">Total:</label><br>
      <input type="number" id="totalSelecionados" value="0" name="totalSelecionados" readonly><br>
      <input onclick="exibirMensagem();" type="submit" id="button" name="submit" value="Confirmar">
    </form>
    <div id="overlay" class="overlay" style="display: none;">
  <div class="message">
   Compra efectuada com sucesso!
  </div>
</div>
  </div>
  <p id="totalPagar">Total a Pagar: 0,00 Mts</p>
    <a href="#" onclick="closePopup();" class="close-button">Fechar</a>
  </div>
</div>

        </div>
      </div>

    <div class="exibicoes">exibicoes
           
    </div>

    <div class="imagens">
       <a href=""><img class="img1" src="img/img1.jpg" alt=""></a> 
        <a href=""><img class="img2" src="img/im2.jpg" alt=""></a>
    </div>

    <div class="aba">
        <p class="p3"> <strong>ESCOLHA SEUS QUADROS FAVORITOS</strong></p>
    </div>
   
    <p class="p4"><strong>ALGUMAS COLECOES</strong></p>
    <div class="php">
        <section class="usuario">
            <?php
            echo "<h2>Ola $nome_cliente, esperamos que goste do nosso trabalho</h2>";
            ?>
        </section>
    </div>


        <div class="tab1">
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Paisagem</p>
            <a href=""><img class="tb1" src="img/img3.jpg" alt=""></a>
            <input type="checkbox" name="imagem1" id="valor1" value="3000">
            <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">3000 MTS</p>
        </div>  

        <div class="tab2">
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Instrumentos</p>
             <a href=""><img src="img/img4.jpg" alt="" class="tb2"></a> 
             <input type="checkbox" name="imagem1" id="valor2" value="2500">
             <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">2500 MTS</p>
        </div> 

        <div class="tab3">
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Vista Do Mar</p>
             <a href=""><img src="img/img5.jpg" alt="" class="img5"></a> 
             <input type="checkbox" name="imagem1" id="valor3" value="2900">
             <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">2900 MTS</p>
        </div> 

        <div class="tab4">
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Gato Negro</p>
                <a href=""> <img src="img/img6.jpg" alt="" class="img6"></a>
                <input type="checkbox" name="imagem1" id="valor4" value="3500">
                <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">3500 MTS</p>
        </div> 

        <div class="tab5">
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Love You</p>
                 <a href=""> <img src="img/img7.jpg" alt="" class="img7"></a>
                 <input type="checkbox" name="imagem1" id="valor5" value="1500">
                <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">1500 MTS</p>
        </div> 

        <div class="tab6">
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Cachorros</p>
                   <a href=""> <img class="tb6" src="img/im10.jpg" alt=""></a>
                   <input type="checkbox" name="imagem1" id="valor6" value="4000">
                <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">4000 MTS</p>
        </div> 

        <div class="tab7">
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Terra Vermelha</p>
                    <a href=""><img class="tb7" src="img/img1.jpg" alt=""></a>
                  <input type="checkbox" name="imagem1" id="valor7" value="4500">
                <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">4500 MTS</p>
        </div> 

        <div class="tab8">
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Florescente</p>
                    <a href=""><img class="tb8" src="img/BBr.jpg" alt=""></a>
                  <input type="checkbox" name="imagem1" id="valor7" value="5000">
                <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">5000 MTS</p>
        </div> 

        <div class="tab9">
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Animal</p>
                    <a href=""><img class="tb9" src="img/animal4jpg.jpg" alt=""></a>
                  <input type="checkbox" name="imagem1" id="valor7" value="3000">
                <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">3000 MTS</p>
        </div> 
    </div>


  <script>
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    var totalPagarElement = document.getElementById('totalPagar');

    for (var i = 0; i < checkboxes.length; i++) {
      checkboxes[i].addEventListener('change', calcularTotal);
    }

    function calcularTotal() {
      var total = 0;

      for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
          total += parseFloat(checkboxes[i].value);
        }
      }

      totalPagarElement.textContent = 'Total a Pagar: ' + total.toFixed(2)+ 'Mts';
    }
  </script>
<button class="boxes" onclick="contarCheckboxes()">Total selecionados</button>

<script>
function contarCheckboxes() {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  var count = 0;
  
  for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
      count++;
    }
  }
  
  alert('Produtos selecionados: ' + count);
}

function openPopup() {
  document.getElementById("popup").style.display = "flex";
}

function closePopup() {
  document.getElementById("popup").style.display = "none";
}
var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  var totalSelecionadosElement = document.getElementById('totalSelecionados');

  for (var i = 0; i < checkboxes.length; i++) {
    checkboxes[i].addEventListener('change', contarSelecionados);
  }

  function contarSelecionados() {
    var count = 0;

    for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].checked) {
        count++;
      }
    }

    totalSelecionadosElement.value = count;
  }
</script>

<script>
function exibirMensagem() {
  var overlayElement = document.getElementById("overlay");
  overlayElement.style.display = "flex";
  
  setTimeout(function() {
    overlayElement.style.display = "none";
  }, 5000);
}
</script>

<div class="foot">
<footer>

<img class="logofoot" src="img/JEART.jpg" alt="" >

<div class="cc">
<a href="https://www.facebook.com/sousa.quive"><img src="img/off.jpg" alt="" class="face"></a>
<a href="https://wa.me/845902911"><img src="img/whats.jpg" alt="" class="whats"></a>
<a href="#"><img src="img/insta.jpg" alt="" class="insta"></a>
</div>

<p class="copy">&copy; 2023, JEART. Mocambique -  Maputo.</p>

<p class="Hora">Horario De Atendimento</p>
<p class="data">Segunda -  Sexta: 09H  - 21H </p>
<p class="sabado">Sabado : 09H  - 16H </p>
<p class="domingo">Domingo : 10H  - 14H </p>

<p class="payment">Pagamentos</p>
<img src="img/visa (1).png" alt="" class="visa">
<img src="img/hipercard.png" alt="" class="hiper">
<img src="img/visa (4).png" alt="" class="visa4">
</footer>
</div>

<?php
    if(isset($_POST['submit'])){
      include_once('conectar.php');

      $numero = $_POST["numero"];
      $nome = $_POST["nome"];
      $endereco = $_POST["endereco"];
      $data = $_POST["data"];
      $hora = $_POST["hora"];
      $totalSelecionados = $_POST["totalSelecionados"];

      // Verificar se o nome da refeição já existe no banco de dados
      $verificar = mysqli_query($mysqli, "SELECT * FROM tabela_confirmacao WHERE nome = '$nome'");
      if(mysqli_num_rows($verificar) > 0) {
        echo "";
      } else {
        $clientes = mysqli_query($mysqli, "INSERT INTO tabela_confirmacao (numero, nome, endereco, data, hora, totalSelecionados)
        VALUES ('$numero', '$nome', '$endereco', '$data', '$hora', '$totalSelecionados')");

        if($clientes) {
          echo "Refeição cadastrada com sucesso!";
        } else {
          echo "Erro ao cadastrar a refeição. Por favor, tente novamente.";
        }
      }
    }
    ?>

                   
</body>
</html>