<?php

    function getAnimalRow() {
        echo '<!-- Animal Row -->
        <div id="animalRow">
            <a id="animal1" class="animal" href=""></a>
            <a id="animal2" class="animal" href=""></a>
            <a id="animal3" class="animal" href=""></a>
            <a id="animal4" class="animal" href=""></a>
        </div>';
    }
    
    function getRandomAnimalRow() {
        $numbers = array();
        for ($i = 0; $i < 4; $i++) {
           $num = rand(0,3);
           // This might give me an error
           while(in_array($num, $numbers) == TRUE) {
               $num = rand(0,3);
           }
            array_push($numbers, $num);
        }
        // Generate static HTML
        echo '<!-- Animal Row -->
        <div id="animalRow">';
        // Loop through array to build elemnents
        for ($k = 0; $k < count($numbers); $k++) {
            switch($numbers[$k]) {
                case 0: 
                    echo '<a id="chicken" class="animal" href="./inc/chicken.php">';
                    echo '</a>';
                    break;
                case 1:
                    echo '<a id="cow" class="animal" href="./inc/cow.php">';
                    echo '</a>';
                    break;
                case 2:
                    echo '<a id="pig" class="animal" href="./inc/pig.php">';
                    echo '</a>';
                    break;
                case 3:
                    echo '<a id="turkey" class="animal" href="./inc/turkey.php">';
                    echo '</a>';
                    break;
            }
        }
        // Generate closing html
        echo '</div>';
    }
    
    function getRandomAnimalRowNoLinks() {
        $numbers = array();
        for ($i = 0; $i < 4; $i++) {
           $num = rand(0,3);
           // This might give me an error
           while(in_array($num, $numbers) == TRUE) {
               $num = rand(0,3);
           }
            array_push($numbers, $num);
        }
        // Generate static HTML
        echo '<!-- Animal Row -->
        <div id="animalRow">';
        // Loop through array to build elemnents
        for ($k = 0; $k < count($numbers); $k++) {
            switch($numbers[$k]) {
                case 0: 
                    echo '<a id="chicken" class="animal">';
                    echo '</a>';
                    break;
                case 1:
                    echo '<a id="cow" class="animal">';
                    echo '</a>';
                    break;
                case 2:
                    echo '<a id="pig" class="animal">';
                    echo '</a>';
                    break;
                case 3:
                    echo '<a id="turkey" class="animal">';
                    echo '</a>';
                    break;
            }
        }
        // Generate closing html
        echo '</div>';
    }
    
?>