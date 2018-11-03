<?php
    class Yellowpad {
    /* ***************************************** 
     * Functions
     * *****************************************
     */
        // Constructor
         function __construct() {
             //Nothing here.
         }
         
         function getRegularPad() {
             echo '<a id="pad3" href="yellowClicked.php"></a>';
         }
         
         function getNoLinkPad() {
             echo '<a id="pad3" href="#"></a>';
         }
         
         function getClickedPad() {
            echo '<a class="active-pad3"></a>';
            echo "<audio autoplay>
                <source src='../sounds/yellow.mp3' type='audio/mpeg'>Your browser does not support the audio element.</audio>";
         }
    }
?>