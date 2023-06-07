<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estatísticas</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 20px;
        }

        .header {
            background-color: black;
            height: 110px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo {
            max-height: 80px;
            margin-right: 20px;
        }

        .JEART {
            color: white;
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 8px;
        }

        .soma {
            margin-top: 40px;
            font-size: 20px;
            font-weight: bold;
        }

        .cadastrados-lista {
            margin-top: 20px;
            font-size: 16px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td,
        table th {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #f2f2f2;
        }

        .search-form {
            margin-bottom: 20px;
        }

        .search-input {
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .search-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 12px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .search-button:hover {
            background-color: #0056b3;
        }
        .button {
            display: inline-block;
            background-color: #4CAF50;
            border: none;
            color: white;
            text-align: center;
            font-size: 16px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            margin-left: 980px;
        }

        .button:hover {
            background-color: #45a049;
        }
    
        .buttonn{
            display: inline-block;
            background-color: #4CAF50;
            border: none;
            color: white;
            text-align: center;
            font-size: 16px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            margin-left: 980px;
            margin-left: 20px;
            
        }

        .buttonn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="header">
        <img class="logo" src="img/JEART.jpg" alt="">
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
    <a href="Index.html">Sair</a>
<a class="button" href="CadAdmin.php">Cadastrar ADMIN</a>
<a class="buttonn" href="busca.php">Listar</a>
    <div class="search-form">
        <form action="" method="get">
            <input class="search-input" type="text" name="search" placeholder="Digite o nome para pesquisar" />
            <button class="search-button" type="submit">Pesquisar</button>
        </form>
    </div>

    <div class="soma">
        <?php
        include_once('conectar.php');

        // Consulta para obter a soma dos totalselecionados
        $resultado_soma = mysqli_query($mysqli, "SELECT SUM(totalSelecionados) AS soma FROM tabela_confirmacao");
        if ($resultado_soma) {
            $row_soma = mysqli_fetch_assoc($resultado_soma);
            $soma = $row_soma['soma'];
            echo "Total de quadros vendidos: " . $soma;
        } else {
            echo "Erro ao calcular a soma dos totais selecionados.";
        }
        ?>
    </div>

    <div class="soma">
        <?php
        // Consulta para obter o total de administradores cadastrados
        $resultado_total_administradores = mysqli_query($mysqli, "SELECT COUNT(*) AS total FROM administrador");
        if ($resultado_total_administradores) {
            $row_total_administradores = mysqli_fetch_assoc($resultado_total_administradores);
            $total_administradores = $row_total_administradores['total'];
            echo "Total de administradores cadastrados: " . $total_administradores;
        } else {
            echo "Erro ao obter o total de administradores cadastrados.";
        }
        ?>
    </div>
<p></p>
<p></p>
<p></p>
    <table class="cadastrados-lista">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Número</th>
                <th>Endereço</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Total Selecionados</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Consulta para obter a lista dos cadastrados e seus nomes
            $search = $_GET['search'] ?? '';

            $sql = "SELECT nome, numero, endereco, data, hora, totalSelecionados FROM tabela_confirmacao";
            if (!empty($search)) {
                $sql .= " WHERE nome LIKE '%$search%'";
            }

            $resultado_cadastrados = mysqli_query($mysqli, $sql);
            if ($resultado_cadastrados) {
                while ($row_cadastrados = mysqli_fetch_assoc($resultado_cadastrados)) {
                    $nome = $row_cadastrados['nome'];
                    $numero = $row_cadastrados['numero'];
                    $endereco = $row_cadastrados['endereco'];
                    $data = $row_cadastrados['data'];
                    $hora = $row_cadastrados['hora'];
                    $totalSelecionados = $row_cadastrados['totalSelecionados'];

                    echo "<tr>";
                    echo "<td>" . $nome . "</td>";
                    echo "<td>" . $numero . "</td>";
                    echo "<td>" . $endereco . "</td>";
                    echo "<td>" . $data . "</td>";
                    echo "<td>" . $hora . "</td>";
                    echo "<td>" . $totalSelecionados . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "Erro ao obter a lista dos cadastrados.";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
