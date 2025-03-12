<?php
    namespace PHP\Modelo;
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

    /*
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