<?php

    namespace PHP\Modelo;
    require_once('Funcionario.php');

    class Funcionario extends Pessoa{

        protected float $salario;

        public function __construct(string $cpf,string $nome,string $telefone,Endereco $endereco,float $salario){
            parent::__construct($cpf,$nome,$telefone,$endereco);
            $this->salario = $salario;
        }

        public function __get(string $dados):mixed{
            return $this->dados;
        }

        public function __set(string $variavel, mixed $dados):void{
            $this->variavel = $dados;
        }

        public function imprimir():string{
            return parent::imprimir()."<br>Salario do Funcionário: R$".$this->salario;
        }
        
    }









?>