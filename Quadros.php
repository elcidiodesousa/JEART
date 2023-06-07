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
.popup-content {
  background-color: #fff;
  padding: 20px;
  max-width: 600px;
  max-height: 80%;
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

.boxes{
position: absolute;
top: 130px;
left: 1070px;
color: white;
background-color: gray;
}


.div2{
  background-color: white;
  height: 60px;
}

h2{
  font-size: 30px;
  font-family:'Times New Roman', Times, serif;
 
}
    </style>


</head>
<body>
  <div class="tabll">
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
        <a href="Index.html">Home</a>
      <div class= "carrinho">
        <a href="#" onclick="openPopup();"><img src="img/th (15).jpg" alt="Suas Compras" width="30px" height="30px"></a>

<div id="popup" class="popup">
  <div class="popup-content">
    <!-- Conteúdo da aba -->
    <!-- Aqui você pode adicionar o conteúdo que deseja exibir no centro da página -->
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
    <!-- Fim do conteúdo da aba -->
    <a href="#" onclick="closePopup();" class="close-button">Fechar</a>
  </div>
</div>
</div>
        
   

      </div>
   

    <div class="tabela1">
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Cores</p>
          <a href=""><img class="tbl1" src="img/foto1.jpg" alt="" ></a>
          <input type="checkbox" name="imagem1" id="valor6" value="1600"> 
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">1600 MTS</p>
    </div>

    <div class="tabela2">
       <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Noite</p>
       <a href=""><img class="fot1" src="img/foto4.jpg" alt=""></a>
       <input type="checkbox" name="imagem1" id="valor7" value="1800">
       <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">1800 MTS</p>
    </div>

    <div class="tabela3">
    <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Caras pintadas</p>
         <a href=""><img class="fot1" src="img/foto6jpg.jpg" alt=""></a>
         <input type="checkbox" name="imagem1" id="valor8" value="2000">
         <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">2000 MTS</p>
    </div>

    <div class="tabela4">
    <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Torre Eifel</p>
       <a href=""><img class="fot1" src="img/foto7.jpg" alt=""></a>
       <input type="checkbox" name="imagem1" id="valor1" value="1100">
       <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">1100 MTS</p>
    </div>

    <div class="tabela5">
         <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Loira</p>
         <a href=""><img src="img/foto8.jpg" alt="" class="tbl5"></a> 
        <input type="checkbox" name="imagem1" id="valor2" value="750">
        <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">750 MTS</p>
    </div>

    <div class="tabela6">
    <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Gato a cores</p>
    <a href=""><img src="img/foto9.jpg" alt="" class="tbl6"></a> 
  <input type="checkbox" name="imagem1" id="valor3" value="2000">
  <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">2000 MTS</p>
    </div>

    <div class="tabela7">
    <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Aguia</p>
    <a href=""> <img src="img/foto11.jpg" alt="" class="tbl7"></a>
  <input type="checkbox" name="imagem1" id="valor4" value="1700">
    <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">1700 MTS</p>
    </div>

    <div class="tabela8">
    <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Rosa acrco-iris</p>
    <a href=""> <img src="img/foto10.jpg" alt="" class="tbl8"></a>
  <input type="checkbox" name="imagem1" id="valor5" value="1500">
  <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">1500 MTS</p>
    </div>

    <div class="tabela9">
    <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Paisagem</p>
    <a href=""><img class="tbl9" src="img/img3.jpg" alt=""></a>
  <input type="checkbox" name="imagem1" id="valor11" value="3000">
  <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">3000 MTS</p>
      
    </div>

    <div class="tabela10">
    <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Fascinante</p>
    <a href=""><img src="img/th (4).jpg" alt="" class="tbl10"></a> 
  <input type="checkbox" name="imagem1" id="valor12" value="2500">
    <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">2500 MTS</p>
      
    </div>

    <div class="tabela11">
    <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Leao</p>
    <a href=""><img src="img/leao.jpg" alt="" class="tbl11"></a> 
  <input type="checkbox" name="imagem1" id="valor13" value="2900">
    <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">2900 MTS</p>
      
    </div>

    <div class="tabela12">
    <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Gato arco-iris</p>
    <a href=""> <img src="img/gato.jpg" alt="" class="tbl12"></a>
  <input type="checkbox" name="imagem1" id="valor14" value="3500">
    <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">3500 MTS</p>
      
    </div>

    <div class="tabl1">
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Paisagem</p>
            <a href=""><img class="tbl8" src="img/img3.jpg" alt=""></a>
            <input type="checkbox" name="imagem1" id="valor1" value="3000">
            <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">3000 MTS</p>
        </div>  

        <div class="tabl2">
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Instrumentos</p>
             <a href=""><img src="img/img4.jpg" alt="" class="tbl8"></a> 
             <input type="checkbox" name="imagem1" id="valor2" value="2500">
             <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">2500 MTS</p>
        </div> 

        <div class="tabl3">
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Vista Do Mar</p>
             <a href=""><img src="img/img5.jpg" alt="" class="tbl8"></a> 
             <input type="checkbox" name="imagem1" id="valor3" value="2900">
             <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">2900 MTS</p>
        </div> 

        <div class="tabl4">
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Gato Negro</p>
                <a href=""> <img src="img/img6.jpg" alt="" class="tbl8"></a>
                <input type="checkbox" name="imagem1" id="valor4" value="3500">
                <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">3500 MTS</p>
        </div> 

        <div class="tabl5">
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Love You</p>
                 <a href=""> <img src="img/img7.jpg" alt="" class="tbl8"></a>
                 <input type="checkbox" name="imagem1" id="valor5" value="1500">
                <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">1500 MTS</p>
        </div> 

        <div class="tabl6">
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Cachorros</p>
                   <a href=""> <img class="tbl8" src="img/im10.jpg" alt=""></a>
                   <input type="checkbox" name="imagem1" id="valor6" value="4000">
                <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">4000 MTS</p>
        </div> 

        <div class="tabl7">
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Terra Vermelha</p>
                    <a href=""><img class="tbl8" src="img/img1.jpg" alt=""></a>
                  <input type="checkbox" name="imagem1" id="valor7" value="4500">
                <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">4500 MTS</p>
        </div> 

        <div class="tabl8">
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Florescente</p>
                    <a href=""><img class="tbl8" src="img/BBr.jpg" alt=""></a>
                  <input type="checkbox" name="imagem1" id="valor7" value="5000">
                <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">5000 MTS</p>
        </div> 

        <div class="tabl9">
          <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">Animal</p>
                    <a href=""><img class="tbl8" src="img/animal4jpg.jpg" alt=""></a>
                  <input type="checkbox" name="imagem1" id="valor7" value="3000">
                <p style= "color: white; font-size: 20px; font-family:'Times New Roman', Times, serif; margin-left: 1px;">3000 MTS</p>
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
  }, 8000);
}
</script>

<div class="foo">
  <footer>
  <div class="l">
  <img class="footlog" src="img/JEART.jpg" alt="" >
  </div>
  <div class="rd">
<a href="https://www.facebook.com/sousa.quive"><img src="img/off.jpg" alt="" class="facee"></a>
<a href="https://wa.me/845902911"><img src="img/whats.jpg" alt="" class="whatss"></a>
<a href="#"><img src="img/insta.jpg" alt="" class="instaa"></a>
</div>

<div class="copyy">
<p class="copyy">&copy; 2023, JEART. Mocambique -  Maputo.</p>

<p class="Horaa">Horario De Atendimento</p>
<p class="dataa">Segunda -  Sexta: 09H  - 21H </p>
<p class="sabadoo">Sabado : 09H  - 16H </p>
<p class="domingoo">Domingo : 10H  - 14H </p>
</div>

<div class="pay">
<p class="paymentt">Pagamentos</p>
<img src="img/visa (1).png" alt="" class="visaa">
<img src="img/hipercard.png" alt="" class="hiperr">
<img src="img/visa (4).png" alt="" class="visa44">
</div>

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