<?php 

require_once( "atvHeranca.php");

class Baleia extends Animal{
    private $barbatanas;

    public function setBarbatanas($barbatanas)
    {
        $this->barbatanas = $barbatanas; 
    }

    public function getBarbatanas(){
        return $this->getBarbatanas();
    }
}

$baleia= new Animal();

$baleia->setNomeAnimal("Lola");
$baleia->setPeso("100000 kg");
$baleia->setTamanho("50 m");
$baleia->setBarbatanas("12");
$baleia->quem("baleia");
print_r($baleia);
?>