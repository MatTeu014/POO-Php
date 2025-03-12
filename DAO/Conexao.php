<?php

    namespace PHP\Modelo\DAO;

    class Conexao{
        function conectar(){
            try{                        
                $conn = mysqli_connect('localhost','root','','ti21m'); //<- local do banco,usuario,senha e nome do banco de dados
                
                if($conn){
                    echo "<br>Conectado com sucesso!";
                    return $conn;
                }
                echo "Algo deu errado!";

            }catch(Exception $erro){
                return "Algo deu Errado!<br><br>".$erro;
            }
        }
    }

?>