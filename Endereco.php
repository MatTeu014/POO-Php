<?php

    namespace PHP\Modelo;

    class Endereco{

        private int $codigo;
        private string $logradouro;
        private int $numero;
        private string $bairro;
        private string $cidade;
        private string $estado;
        private int $cep;
        private string $pais;


        public function __construct(int $codigo,string $logradouro,int $numero,string $bairro,string $cidade,string $estado,int $cep,string $pais){
            $this->codigo = $codigo;
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->bairro = $bairro;
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->cep = $cep;
            $this->pais = $pais;
        }

        public function __get(string $dados):mixed{
            return $this->$dados;
        }

        public function __set(string $variavel,string $dados):void{
            $this->variavel = $dados;
        }

        public function imprimir():mixed{
            return "<br>Código: ".$this->codigo."<br>Logradouro: ".$this->logradouro."<br>Número: ".$this->numero."<br>Bairro: ".$this->bairro."<br>Cidade: ".$this->cidade."<br>Estado: ".$this->estado."<br>Cep: ".$this->cep."<br>País: ".$this->pais;
        }


    }








?>