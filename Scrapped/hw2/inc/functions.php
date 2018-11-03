<?php

    // Variables
    $rounds = 0;    //To hold the number of rounds.
    // Functions
    
    // Determine which pad is chosen
    function getSelectedPad() {
        for ($i = 1; $i < 5; $i++) {
            $pad = $_POST['pad' . $i];
            if ($pad == "green" || $pad == "red" || $pad == "yellow" || $pad == "blue" ) {
                return $pad;
            }
        }
    }
    
    echo $selectedPad;
    
    
    
?>