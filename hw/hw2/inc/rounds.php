<?php
    /* ***************************************** 
     * Variables
     * *****************************************
     */
    $rounds = 0;
    
    /* ***************************************** 
     * Functions
     * *****************************************
     */
    
    //Return the number of rounds
    function getRounds() {
        return($rounds);
    }
    
    //Increment rounds
    function incrementRound() {
        $rounds += 1;
    }
    
    //Display the current amount of rounds
    function displayRounds() {
        echo "<!-- Round Information and Points -->
            <div id='gameInfo'>
                <h2 id='rounds'>Rounds: $rounds</h2>
                <h2 id='points'>Points: </h2>
            </div>";
    }
?>