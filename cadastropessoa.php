<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Pessoa</title>
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
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            text-align: left;
        }

        h1 {
            margin-bottom: 20px;
            color: #7305bd;
        }

        h2 {
            margin-top: 20px;
            color: #28a745;
        }

        .error-message {
            margin-top: 20px;
            color: #dc3545;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            background-color: #7305bd;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #7305bd;
        }
    </style>
    
</head>
<body>
    <h2>Cadastrar Pessoa</h2>
    <form action="CadastroPessoaExe.php" method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco">
        </div>
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro">
        </div>
        <div class="form-group">
            <label for="cep">CEP</label>
            <input type="text" id="cep" name="cep" pattern="\d{5}-\d{3}" placeholder="12345-678" required>
        </div>
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <select name="cidade" id="cidade">
                <?php
                    include('include/conexao.php');
                    $sql = "SELECT * FROM cidade";
                    $result = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($result)) {
                        echo "<option value='".$row['id']."'>".$row['nome']."/".$row['estado']."</option>";
                    }
                ?>
            </select>
        </div>
        <div class="button-container">
            <button type="submit" class="btn">Cadastrar</button>
        </div>
    </form>
    <div class="btn-container">
            <a href="ListarPessoa.php" class="btn btn-secondary">Consultar Pessoas</a>
            <a href="index.html" class="btn btn-secondary">Voltar à página inicial</a>
    </div>
</body>
</html>