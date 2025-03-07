<?php
    namespace PHP\Modelo;

    require_once ('Endereco.php');
    use PHP\Modelo\Endereco;

    class Pessoa{
        //Encapsulamento
        protected string $cpf;
        protected string $nome;
        protected string $telefone;
        protected Endereco $endereco;

        //Declara valores iniciais para as variáveis
        public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }
        
        //Métodos de Acesso e Modificadores
        //get e set
        public function __get(string $dados):mixed{
            return $this->dados;
        }//fim do get
    
        public function __set(string $variavel, string $dados):void{
            $this->variavel = $dados;
        }//fim do set
    
        public function imprimir():mixed{
            return "<br>CPF: " . $this->cpf . "<br>Nome: " . $this->nome . "<br>Telefone: " . $this->telefone . "<br>Endereço: " . $this->endereco->imprimir();
        }//fim do método imprimir

    }//fim da classe Pessoa




?>