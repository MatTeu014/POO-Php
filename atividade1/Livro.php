<?php

    namespace PHP\atividade1;


    class Livro{

        private string $codigo;
        private string $nome;
        private string $autor;
        private string $preco;
        private string $disponibilidade;

        public function __construct(string $codigo,string $nome,string $autor,string $preco,string $disponibilidade){
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->autor = $autor;
            $this->preco = $preco;
            $this->disponibilidade = $disponibilidade;
        }   

        public function __get(string $dados):mixed{
            return $this->dados;
        }

        public function __set(string $variavel,string $dados):void{
            $this->variavel = $dados;
        }

        public function imprimir():mixed{
            return "Código do Livro: ".$this->codigo."<br>Nome: ".$this->nome."<br>Autor: ".$this->autor."<br>Preço: ".$this->preco."<br>Disponibilidade: ".$this->disponibilidade;
        }

    }


?>