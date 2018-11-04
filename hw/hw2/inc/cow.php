<?php

function getCow() {
    echo "<audio autoplay><source src='../sounds/cow.wav' type='audio/wav'>Your browser does not support the audio element.</audio>";
    echo '<!-- Selected Animal -->
        <div id="selectedAnimal">
            <div class="animalPicture" id="cow"></div>
            <div class="animalText">Cows:<br />Cows are very social farm animals! If you
            ever go to a cow farm, all of will herd together, to violently stare at you and moo. It
            is kind of scary but never fear, they are quite docile creatures. Here are some fun facts: 
            They cannot vommit, they only have teeth on the bottom of their mouth, and they can smell
            up to six miles! Cows make milk and great burgers!</div>
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
getCow();
getCloseBodyTag();
getCloseHtml();


?>