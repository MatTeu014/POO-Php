<?php
    namespace PHP\Modelo\Telas;

    require_once('../DAO/Conexao.php');
    require_once('../DAO/Consultar.php');
    use PHP\Modelo\DAO\Conexao;    
    use PHP\Modelo\DAO\Excluir;

    $conexao = new Conexao();
    $excluir = new Excluir();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>Excluir Cliente</title>
    </head>

    <body>
    
        <h1>Excluir Cliente</h1><br>

        <form method = "POST" class = "form-control form-control -sm">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Cpf:</label>
                <input type="text" class="form-control" id="cpf" name = "cpf">
            </div>

            <button type = "submit">Excluir<?php
            ?></button>

        </form>

        <?php
            $excluir->excluirCliente($conexao,$_POST['cpf']);
        ?>
        
        <button><a href = "..\main.php">Voltar</a></button>

    </body>     



</html>