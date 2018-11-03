<?php
    class Redpad {
    /* ***************************************** 
     * Functions
     * *****************************************
     */
        // Constructor
         function __construct() {
             //Nothing here.
         }
         
         function getRegularPad() {
             echo '<a id="pad2" href="redClicked.php"></a>';
         }
         
         function getNoLinkPad() {
             echo '<a id="pad2" href="#"></a>';
         }
         
         function getClickedPad() {
            echo '<a class="active-pad2"></a>';
            echo "<audio autoplay>
                <source src='../sounds/red.mp3' type='audio/mpeg'>Your browser does not support the audio element.</audio>";
         }
    }
?>