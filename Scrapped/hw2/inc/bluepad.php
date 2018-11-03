<?php

    class Bluepad {
        /* 
         * *************************************************
         * Functions
         * *************************************************
         */
         
         function __constructor() {
             // Empty constructor
         }
         
         function getRegularPad() {
             echo '<a id="pad4" href="blueClicked.php"></a>';
         }
         
         function getNoLinkPad() {
             echo '<a id="pad4" href="#"></a>';
         }
         
         function getClickedPad() {
            echo '<a class="active-pad4"></a>';
            echo "<audio autoplay>
                <source src='../sounds/blue.mp3' type='audio/mpeg'>Your browser does not support the audio element.</audio>";
         }
    }
?>