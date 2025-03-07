<?php

    namespace PHP\Modelo;


    class Veiculo{

        private int $codigo;
        private string $placa;
        private string $cliente;
        private string $cor;
        private string $modelo;
        private string $ano;
        private string $marca;


        public function __construct(int $codigo,string $placa,string $cliente,string $cor,string $modelo,string $ano,string $marca){
            $this->codigo = $codigo;
            $this->placa = $placa;
            $this->cliente = $cliente;
            $this->cor = $cor;
            $this->modelo = $modelo;
            $this->ano = $ano;
            $this->marca = $marca;
        }

        public function __get(string $dados):mixed{
            return $dados;
        }

        public function __set(string $variavel,string $dados):void{
            $this->variavel = $dados;
        }

        public function imprimir():string{
            return "<br>Código: ".$this->codigo."<br>Placa: ".$this->placa."<br>Cliente: ".$this->Cliente."<br>Cor: ".$this->cor."<br>Modelo: ".$this->modelo."<br>Ano: ".$this->ano."<br>Marca: ".$this->marca;
        }


    }

?>