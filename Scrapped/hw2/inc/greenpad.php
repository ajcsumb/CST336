<?php
    
    class Greenpad {
        /* 
         * *************************************************
         * Functions
         * *************************************************
         */
         
         // Constructor
         function __construct() {
             //Nothing here.
         }
         
         function getRegularPad() {
             echo '<a id="pad1" href="greenClicked.php"></a>';
         }
         
         function getNoLinkPad() {
             echo '<a id="pad1" href="#"></a>';
         }
         
         function getClickedPad() {
            echo '<a class="active-pad1"></a>';
            echo "<audio autoplay>
                <source src='../sounds/green.mp3' type='audio/mpeg'>Your browser does not support the audio element.</audio>";
         }
    }
?>