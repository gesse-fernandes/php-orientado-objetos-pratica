<?php


 class Carro{
    private $carro;
    protected $cor = "roxo";
    public function acelerar(){
        return "100 Km/h";
    }

    public function getCor(){
        return $this->cor;
    }

    protected function portas(){
        return "quatro portas";
    }

    public function getPortas(){
        return $this->portas();
    }

} 