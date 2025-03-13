<?php
    /*namespace PHP\Modelo;
    require_once('Pessoa.php');//Chamar a classe pessoa
    require_once('Cliente.php');//Chamar a classe cliente
    require_once('Funcionario.php');
    require_once('Endereco.php');
    require_once('Produto.php');
    require_once('Veiculo.php');
    require_once('DAO/Conexao.php');
    

    use PHP\Modelo\Pessoa;//Defina qual a classe
    use PHP\Modelo\Cliente;
    use PHP\Modelo\Funcionario;
    use PHP\Modelo\Endereco;
    use PHP\Modelo\Produto;
    use PHP\Modelo\Veiculo;
    use PHP\Modelo\DAO\Conexao;

    $conexao = new Conexao();
    $conexao->conectar();

    
    $endereco1 = new Endereco(1,'Avenida Senador Vergueiro','Centro','Bairro','São Bernardo do Campo','São Paulo',0129309,'Brasil');

    $pessoa1 = new Pessoa('12345678910','Roberto','123123123',$endereco1);

    $cliente1 = new Cliente('12345678910','Roberto','123123123',$endereco1,80);

    $funcionario1 = new Funcionario('12345678910','Roberto','123123123',$endereco1,800);

    $produto1 = new Produto(1,'carro','2 metros','100kg');

    $veiculo1 = new Veiculo(1,'abc123','cliente','branco','savero','2002','ram');
    
    echo"<br><br>".$endereco1->imprimir();   
    echo"<br><br>".$pessoa1->imprimir();
    echo"<br><br>".$cliente1->imprimir();
    echo"<br><br>".$funcionario1->imprimir();  
    echo"<br><br>".$produto1->imprimir();
    echo "<br><br>".$veiculo1->imprimir();
  */  
?>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>Pagina Principal</title>
    </head>

    <body>
    
        <h1>Bem-Vindo!</h1><br>

        <form class = "form-control form-control -sm">

            <button><a href = "Telas/CadastrarCliente.php">Cadastrar</a></button>
            <button><a href = "Telas/ConsultarCliente.php">Consultar</a></button>
            <button><a href = "Telas/AtualizarCliente.php">Atualizar</a></button>
            <button><a href = "Telas/ExcluirCliente.php">Excluir</a></button>
            
        </form>

       
       
    </body>     

</html>