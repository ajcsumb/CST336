<?php

function getTurkey() {
    echo "<audio autoplay><source src='../sounds/turkey.mp3' type='audio/mpeg'>Your browser does not support the audio element.</audio>";
    echo '<!-- Selected Animal -->
        <div id="selectedAnimal">
            <div class="animalPicture" id="turkey"></div>
            <div class="animalText">Turkeys:<br />Turkeys are almost like really big chickens! Except! They are not!
            They actually fly quite well and sleep in trees! Their eggs are much larger than chickens and taste just as 
            good, if not better. Female turkeys, ironically, do not gobble. They also taste great stuffed on Thanksgiving!</div>
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
getTurkey();
getCloseBodyTag();
getCloseHtml();


?>