<?php

    namespace PHP\Modelo;


    class Produto{

        protected int $codigo;
        protected string $descricao;
        protected string $tamanho;
        protected string $peso;

        public function __construct(int $codigo,string $descricao,string $tamanho,string $peso){
            $this->codigo = $codigo;
            $this->descricao = $descricao;
            $this->tamanho = $tamanho;
            $this->peso = $peso;
        }

        public function __get(string $dados):mixed{
            return $this->dados;
        }

        public function __set(string $variavel, string $dados):void{
            $this->variavel = $dados;
        }

        public function imprimir():string{
            return "<br>Código: ".$this->codigo."<br>Descrição: ".$this->descricao."<br>Tamanho: ".$this->tamanho."<br>Peso: ".$this->peso;
        }

    }




?>