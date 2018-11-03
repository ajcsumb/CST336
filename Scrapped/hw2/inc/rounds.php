<?php

    class Round {
        /* ***************************************** 
         * Variables
         * *****************************************
         */
         public static $rounds;
         
        /* ***************************************** 
         * Functions
         * *****************************************
         */
         
         //Increment rounds
        function incrementRound() {
            $this->rounds++;
        }
        
        //Display the current amount of rounds
        function displayRounds() {
            echo "<!-- Round Information and Points -->
                <div id='gameInfo'>
                    <h2 id='rounds'>Rounds: $this->rounds</h2>
                    <h2 id='points'>Points: </h2>
                </div>";
         }
         
         // Display an empty Rounds - USE ONLY WITH INDEX
         function displayEmptyRounds() {
            echo "<!-- Round Information and Points -->
                <div id='gameInfo'>
                    <h2 id='rounds'>Rounds: </h2>
                    <h2 id='points'>Points: </h2>
                </div>"; 
         }
         
         //Constructor
         function __construct() {
             $this->rounds = 1;
         }
    }
?>