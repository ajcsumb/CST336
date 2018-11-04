<?php

$text = 'Chickens:<br />Chickens are friendly creatures and are great for bug control! 
        They lay eggs consistently throughout the year. They live in coops. They cannot fly very well.
        But some breeds of chicken are known to fly over 5ft walls!';

function getChicken() {
    echo "<audio autoplay><source src='../sounds/chicken.mp3' type='audio/mpeg'>Your browser does not support the audio element.</audio>";
    echo '<!-- Selected Animal -->
        <div id="selectedAnimal">
            <div class="animalPicture" id="chicken"></div>
            <div class="animalText">Chickens:<br />Chickens are friendly creatures and are great for bug control! 
        They lay eggs consistently throughout the year. They live in coops. They cannot fly very well.
        But some breeds of chicken are known to fly over 5ft walls!</div>
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
getChicken();
getCloseBodyTag();
getCloseHtml();



?>