<?php
    static $animals = array();
    
    function addAnimal($a) {
        global $animals;
        array_push($animals, $a);
    }
    
    function getAnimals() {
        global $animals;
        return $animals;
    }
?>