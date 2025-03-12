<?php

    namespace PHP\Modelo;

    require_once('Produto.php');
    use PHP\Modelo\Produto;

    class Compra{

        private int $codigo;
        private Produto $produtos;
        private string $quantidade;
        private float $precoUnitario;
        private float $precoFinal;

        public function __construction(int $codigo,Produto $produtos,string $quantidade,float $precoUnitario,float $precoFinal){
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
            return "<br>Código: ".$this->codigo."<br>Produtos: ".$this->produtos->imprimir()."<br>Quantidade: ".$this->quantidade."<br>Preço Unitario: ".$this->precoUnitario."<br>Preço Final: ".$this->precoFinal.
        }

    }


?>