<?php

    namespace PHP\Modelo;


    class Compra{

        private int $codigo;
        private string $produtos;
        private string $quantidade;
        private float $precoUnitario;
        private float $precoFinal;

        public function __construction(int $codigo,string $produtos,string $quantidade,float $precoUnitario,float $precoFinal){
            $this->codigo = $codigo
            $this->produtos = $produtos
            $this->quantidade = $quantidade
            $this->precoUnitario = $precoUnitario
            $this->precoFinal = $precoFinal
        }

        public function __get(string $dados){
            return $dados
        }

        public function __set(string $variavel,string $dados){
            $this->variavel = $dados
        }

        public function imprimir(){
            return "<br>Código: ".$this->codigo."<br>Produtos: ".$this->produtos."<br>Quantidade: ".$this->quantidade."<br>Preço Unitario: ".$this->precoUnitario."<br>Preço Final: ".$this->precoFinal.
        }

    }


?>