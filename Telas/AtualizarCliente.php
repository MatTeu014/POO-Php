<?php
    namespace PHP\Modelo\Telas;
    
    require_once('../DAO/Conexao.php');
    require_once('../DAO/Atualizar.php');

    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Atualizar;

    $conexao = new Conexao();//Acessar a classe conexao
    $atualizar = new Atualizar();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>Atualizar Cliente</title>
    </head>
    <body>


        <h1>Atualizar Cliente</h1><br>

        <form method = "POST" class = "form-control form-control -sm">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Cpf:</label>
                <input type="text" class="form-control" id="cpf" name = "cpf">
            </div>

            <br>
            
            <select name = "campos" class="form-select" aria-label="Default select example">
                <option selected>Escolha um Campo para Atualizar</option>
                <option value="nome">Nome</option>
                <option value="telefone">Telefone</option>
                <option value="logradouro">Logradouro</option>
                <option value="numero">Número</option>
                <option value="bairro">Bairro</option>
                <option value="cidade">Cidade</option>
                <option value="estado">Estado</option>
                <option value="cep">CEP</option>
                <option value="pais">País</option>
            </select>

            <br>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Novo Dado:</label>
                <input type="text" class="form-control" id="novoDado" name = "novoDado">
            </div>

            <button type = "submit">Atualizar

                <?php
                
                    $atualizar->atualizarCliente($conexao,$_POST['campos'],$_POST['novoDado'],$_POST['cpf']);

                ?>

            </button>

        </form>

        <button><a href = "..\main.php">Voltar</a></button>

    </body>
</html>