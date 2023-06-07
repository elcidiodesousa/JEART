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
         @keyframes fadeIn {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }
    
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      animation: fadeIn 0.5s ease-in-out;
    }
    
    .container {
      max-width: 500px;
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
  width: 800px;
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


.carrinho{

  margin-left: 1200px;
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
    </style>
    
</head>
<body>
  <div class="tablla">
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
        </div>
        <a href="Atendimento.php">Atendimento</a>

      <div class= "carrinho">
        <a href="#" onclick="openPopup();"><img src="img/th (15).jpg" alt="Suas Compras" width="30px" height="30px"></a>

        <div id="popup" class="popup">
  <div class="popup-content">
    <!-- Conteúdo da aba -->
    <!-- Aqui você pode adicionar o conteúdo que deseja exibir no centro da página -->
    <div class="container">
    <h1>Tela de Confirmação</h1>
    <form action="cofirmacao.php" method="post">
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

    <p id="totalPagar">Total a Pagar: 0,00 Mts</p>
    

    <!-- Fim do conteúdo da aba -->
    <a href="#" onclick="closePopup();" class="close-button">Fechar</a>
  </div>
</div>

        
   

      </div>
   




      <div class="tabela1">
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Renascer</p>
          <a href=""><img class="tbl1" src="img/fotos5.jpg" alt=""></a>
  <input type="checkbox" name="imagem1" id="valor1" value="2000"> 
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">2000 MTS</p>
    </div>

    <div class="tabela2">
       <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Tribo</p>
       <a href=""><img src="img/moz.jpg" alt="" class="tbl1"></a> 
  <input type="checkbox" name="imagem1" id="valor2" value="2500">
       <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">2500 MTS</p>
    </div>

    <div class="tabela3">
    <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Assobio</p>
    <a href=""><img src="img/moz2.jpg" alt="" class="tbl1"></a> 
  <input type="checkbox" name="imagem1" id="valor3" value="3500">
         <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">3500 MTS</p>
    </div>

    <div class="tabela4">
    <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Yellow</p>
    <a href=""> <img src="img/moz3.jpg" alt="" class="tbl1"></a>
  <input type="checkbox" name="imagem1" id="valor4" value="4500">
       <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">4500 MTS</p>
    </div>

    <div class="tabela5">
         <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Adoracao</p>
         <a href=""> <img src="img/moz4.jpg" alt="" class="tbl1"></a>
  <input type="checkbox" name="imagem1" id="valor5" value="1500">
        <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">1500 MTS</p>
    </div>

    <div class="tabela6">
    <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Cabelos</p>
    <a href=""><img class="tbl1" src="img/moz5.jpg" alt=""></a>
<input type="checkbox" name="imagem1" id="valor1" value="1100">
  <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">1100 MTS</p>
    </div>

    <div class="tabela7">
    <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Nascer Do Sol</p>
    <a href=""><img src="img/moz6.jpg" alt="" class="tbl8"></a> 
<input type="checkbox" name="imagem1" id="valor2" value="1700">
    <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">1700 MTS</p>
    </div>

    <div class="tabela8">
    <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Arte</p>
    <a href=""> <img src="img/moz7.jpg" alt="" class="tbl8"></a>
<input type="checkbox" name="imagem1" id="valor4" value="1700">
  <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">1500 MTS</p>
    </div>

    <div class="tabela9">
    <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">A luz</p>
    <a href=""><img src="img/foto4.jpg" alt="" class="tbl8"></a> 
<input type="checkbox" name="imagem1" id="valor3" value="2000">
  <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">2000 MTS</p>
      
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
  }, 8000);
}
</script>



<div class="fooo">
  <footer>
  <div class="l">
  <img class="footlog" src="img/JEART.jpg" alt="" >
  </div>
  <div class="rdd">
<a href="https://www.facebook.com/sousa.quive"><img src="img/off.jpg" alt="" class="faceee"></a>
<a href="https://wa.me/845902911"><img src="img/whats.jpg" alt="" class="whatsss"></a>
<a href="#"><img src="img/insta.jpg" alt="" class="instaaa"></a>
</div>

<div class="copyyy">
<p class="copyyy">&copy; 2023, JEART. Mocambique -  Maputo.</p>
</div>
<p class="Horaaa">Horario De Atendimento</p>
<p class="dataaa">Segunda -  Sexta: 09H  - 21H </p>
<p class="sabadooo">Sabado : 09H  - 16H </p>
<p class="domingooo">Domingo : 10H  - 14H </p>
</div>

<div class="payy">
<p class="paymenttt">Pagamentos</p>
<img src="img/visa (1).png" alt="" class="visaaa">
<img src="img/hipercard.png" alt="" class="hiperrr">
<img src="img/visa (4).png" alt="" class="visa444">
</div>

  </footer>
</div>





</div>
</body>
</html>