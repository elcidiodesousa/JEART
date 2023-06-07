<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Administradores</title>
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

        .admin-list {
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
        <a href="estatisticas.php">voltar</a>
    <div class="search-form">
        <form action="" method="get">
            <input class="search-input" type="text" name="search" placeholder="Digite o nome para pesquisar" />
            <button class="search-button" type="submit">Pesquisar</button>
        </form>
    </div>

    <table class="admin-list">
        <thead>
            <tr>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once('conectar.php');

            $search = $_GET['search'] ?? '';

            $sql = "SELECT nome FROM administrador";
            if (!empty($search)) {
                $sql .= " WHERE nome LIKE '%$search%'";
            }

            $resultado_administradores = mysqli_query($mysqli, $sql);
            if ($resultado_administradores) {
                while ($row_administradores = mysqli_fetch_assoc($resultado_administradores)) {
                    $nome = $row_administradores['nome'];

                    echo "<tr>";
                    echo "<td>" . $nome . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "Erro ao obter a lista de administradores cadastrados.";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
