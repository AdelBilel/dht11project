<?php
namespace domain;

class Measure 

{ // instanciation de la class user//
    public $id;
    public $temperature;
    public $humidite;
    
    
    public function __construct($id, $temperature, $humidite) { // fonction __construct avec param //
        
        $this->id   = $id;
                
        $this->temperature = $temperature; // $this-> : cet objet ! email : attribut de User est égale à $email : param fonction construct //
        
        $this->humidite = $humidite;// $this sert a attribuer une valeur //
        
        
    }
    
    
}

?>
