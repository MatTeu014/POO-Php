<?php
    namespace PHP\Modelo\Telas;
    
    require_once('../DAO/Conexao.php');
    require_once('../DAO/Inserir.php');
    require_once('../DAO/Consultar.php');

    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Consultar;

    $conexao = new Conexao();//Acessar a classe conexao
    $inserir = new Inserir();//
    $consultar = new Consultar();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Cadastrar Cliente</title>
</head>
<body>


    <h1>Cadastro de Clientes</h1><br>

    <form method = "POST" class = "form-control form-control -sm">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Cpf:</label>
            <input type="text" class="form-control" id="cpf" name = "cpf">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name = "nome">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Telefone:</label>
            <input type="text" class="form-control" id="telefone" name = "telefone">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Preço Total:</label>
            <input type="text" class="form-control" id="precoTotal" name = "precoTotal">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Logradouro:</label>
            <input type="text" class="form-control" id="logradouro" name = "logradouro">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Número:</label>
            <input type="text" class="form-control" id="numero" name = "numero">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Bairro:</label>
            <input type="text" class="form-control" id="bairro" name = "bairro">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name = "cidade">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Estado:</label>
            <input type="text" class="form-control" id="estado" name = "estado">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Cep:</label>
            <input type="text" class="form-control" id="cep" name = "cep">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">País:</label>
            <input type="text" class="form-control" id="pais" name = "pais">
        </div>

        <button type = "submit">Cadastrar<?php

            try{

                $cpf = $_POST['cpf'];
                $nome = $_POST['nome'];
                $telefone = $_POST['telefone'];
                $precoTotal = $_POST['precoTotal'];
                $logradouro = $_POST['logradouro'];
                $numero = $_POST['numero'];
                $bairro = $_POST['bairro'];
                $cidade = $_POST['cidade'];
                $estado = $_POST['estado'];
                $cep = $_POST['cep'];
                $pais = $_POST['pais'];
            }catch(Except $erro){
                echo "Algo deu errado!<br>$erro";
            }

            $inserir->cadastrarEndereco($conexao,$logradouro,$numero,$bairro,$cidade,$estado,$cep,$pais);

            $inserir->cadastrarCliente($conexao,$cpf,$nome,$telefone,$consultar->consultarEndereco($conexao),$precoTotal);
            
        ?></button>

        

    </form>



</body>
</html>
