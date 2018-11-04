<?php

function getPig() {
    echo "<audio autoplay><source src='../sounds/pig.wav' type='audio/wav'>Your browser does not support the audio element.</audio>";
    echo '<!-- Selected Animal -->
        <div id="selectedAnimal">
            <div class="animalPicture" id="pig"></div>
            <div class="animalText">Pigs:<br />Pigs are large, sometimes pink, black, or brown, and mud loving mammals. They are the 
            domesticated version of the violent wild boar. They are used for truffle hunting, and in many parts of the 
            world, truffles are an expensive delicacy! You may never see it happen, but pigs are actually good swimmers! 
            A really fun fact, is that there are over 2 million pigs in the world! They can be found on every continent except
            Antartica!</div>
        </div>';
}

// Include statements
include './staticElements.php';
include './header.php';
include './titleBar.php';


// Layout
getBoilerplate();
getHeaderNonIndex();
getOpenBodyTag();
getBackBar();
getPig();
getCloseBodyTag();
getCloseHtml();


?>