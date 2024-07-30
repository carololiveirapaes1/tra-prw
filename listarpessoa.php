<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Clientes</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f0d4fc;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-right: 10px;
            text-decoration: none;
            color: #fff;
            background-color: #7305bd;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #7305bd;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #7305bd;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
        include('includes/conexao.php');
        $sql = "SELECT * FROM Cliente";
        //Executa a consulta
        $result = mysqli_query($con, $sql);
    ?>
    <h1>Consulta de Cidades</h1>
    <div style="text-align: center; margin-bottom: 20px;">
        <a href="CadastroCliente.html" class="btn">Cadastrar Cliente</a>
        <a href="index.html" class="btn">Voltar à página inicial</a>
    </div>
    <table align="center" border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php //mysqli_fetch_array lê uma linha opr vez
            //Retorna todas as linhas da consulta
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['senha']."</td>";
                echo "<td><a href='alteraCliente.php?id=".$row['id']."'>Alterar</a></td>";
                echo "<td><a href='deletaCliente.php?id=".$row['id']."'>Deletar</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>