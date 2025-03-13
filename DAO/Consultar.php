<?php

    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        function consultarEndereco(Conexao $conexao){

            try{

                $conn = $conexao->conectar();

                $sql = "select max(codigo) from endereco";

                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){//enquanto existir dados, ele vai procurar o dado especifico

                    return $dados['max(codigo)'];//encerraro o processo
    
                }


            }catch(Exception $erro){
                echo "Algo deu Errado!<br>$erro";
            }

        }//fim do metodo consultar

        function ConsultarCliente($conexao, string $cpf){

            try{

                $conn = $conexao->conectar();
                $sql = "select * from cliente inner join endereco where codigoEndereco = codigo and cpf = $cpf";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){

                    if($dados['cpf'] == $cpf){

                        echo "<br>Cpf: ".$dados['cpf']."<br>Nome: ".$dados['nome']."<br>Telefone:".$dados['telefone']."<br>Preço Total: ".$dados['precoTotal']."<br>Logradouro: ".$dados['logradouro']."<br>Número: ".$dados['numero']."<br>Bairro: ".$dados['bairro']."<br>Cidade: ".$dados['cidade']."<br>Estado: ".$dados['estado']."<br>CEP: ".$dados['cep']."<br>País: ".$dados['pais'];
                        return;//encerrar o processo

                    }//fim do if

                }//fim do while

            }catch(Exception $erro){

                echo "Algo deu errado<br><br>".$erro;

            }//fim do try

        }

        function consultarEnderecoCPF(Conexao $conexao,string $cpf){

            try{

                $conn = $conexao->conectar();
                $sql = "select codigoEndereco from cliente where cpf = '$cpf'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){

                    return $dados['codigoEndereco'];

                }//fim do while

            }catch(Exception $erro){

                "Algo deu errado<br>".$erro;

            }

        }
        
    }//fim da classe

?>