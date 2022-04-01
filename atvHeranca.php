<?php

class Animal{

    private $nomeAnimal;
    private $peso;
    private $tamanho; 


    public function quem(string $tipoAnimal)
    {
       echo "vc é um(a) ".$tipoAnimal."..."; 
    }
    public function setNomeAnimal($nomeAnimal)
    {
        $this->nomeAnimal = $nomeAnimal; 
    }

    public function getNomeAnimal(){
        return $this->getNomeAnimal();
    }
    public function setPeso($peso)
    {
        $this->peso = $peso; 
    }

    public function getPeso(){
        return $this->getPeso();
    }
    public function setTamanho($tamanho)
    {
        $this->tamanho = $tamanho; 
    }

    public function getTamanho(){
        return $this->getTamanho();
    }
    public function setBarbatanas($barbatanas)
    {
        $this->barbatanas = $barbatanas; 
    }


}

?>