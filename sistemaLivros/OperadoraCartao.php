<?php

    namespace PHP\atividade1;


    class OperadoraCartao{

        private string $numeroConta;
        private string $numeroCartao;
        private string $senha;

        public function __construct(string $numeroConta,string $numeroCartao,string $senha){
            $this->numeroConta = $numeroConta;
            $this->numeroCartao = $numeroCartao;
            $this->senha = $senha;
        }

        public function __get(string $dados):mixed{
            return $this->$dados;
        }

        public function __set(string $variavel, string $dados):void{
            $this->variavel = $dados;
        }

        public function imprimir(): string{
            return "Número da Conta: ".$this->numeroConta."Número do Cartão: ".$this->numeroCartao."Senha: ".$this->senha;
        }

    }



?>