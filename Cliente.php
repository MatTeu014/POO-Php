<?php

    namespace PHP\Modelo;
    require_once ('Pessoa.php');
    use PHP\Modelo\Pessoa;

    class Cliente extends Pessoa{
        protected float $precoTotal;

        public function __construct(string $cpf,string $nome,string $telefone,Endereco $endereco,float $precoTotal){
            
            parent::__construct($cpf,$nome,$telefone,$endereco);
            $this->precoTotal = $precoTotal;
   
        }//fim do construtor
        

        public function __get(string $dados):mixed{
            return $this->dados;
        }// fim do get

        public function __set(string $variavel, string $dados):void{
            $this->variavel = $dados;
        }//fim do set

        public function imprimir():string{
            return parent::imprimir()."<br>Preço Total: R$".$this->precoTotal;
        }
        
    }//fim da classe






?>