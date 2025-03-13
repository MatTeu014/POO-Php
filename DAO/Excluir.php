<?php

    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Excluir{

        function excluirCliente(Conexao $conexao,$cpf){

            try{

                $conn = $conexao->conectar();
                $sql = "delete from cliente where cpf = '$cpf'";
                $result = mysqli_quere($conn,$sql);
                mysqli_close($conn);

                if($result){

                    echo "Excluido com Sucesso!";

                }else{
                    
                    echo "Não Excluído!";

                }

            }catch(Exception $erro){

                return "Algo deu Errado!".$erro;

            }

        }

    }


?>