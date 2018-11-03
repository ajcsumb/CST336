<?php

    // Include Statements
    include 'greenpad.php';
    include 'redpad.php';
    include 'yellowpad.php';
    include 'bluepad.php';
    
    // Create the gamepad objects
    $gpad = new Greenpad();
    $rpad = new Redpad();
    $ypad = new Yellowpad();
    $bpad = new Bluepad();
    
    class Gamepad {
    /* ***************************************** 
     * Functions
     * *****************************************
     */
     
        // Constructor
        function __constructor() {
            // Empty constructor
        }
        
        // Get regular gamepad
        function getRegularGamepad() {
            echo '<!-- Gamepad - This is where the pads are contained -->
            <div id="gamePad">
                <!-- The boxes for the gamepad -->';
            $gpad->getRegularPad();
            $rpad->getRegularPad();
            $ypad->getRegularPad();
            $bpad->getRegularPad();
            echo '</div>';
        }
        
        // Get Index Gamepad - ONLY USE WITH INDEX
        function getIndexGamepad() {
            echo '<!-- Gamepad - This is where the pads are contained -->
            <div id="gamePad">
                <!-- The boxes for the gamepad -->';
            $gpad->getNoLinkPad();
            $rpad->getNoLinkPad();
            $ypad->getNoLinkPad();
            $bpad->getNoLinkPad();
            echo '</div>';
        }
    }
?>