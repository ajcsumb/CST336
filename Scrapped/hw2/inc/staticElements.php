<?php
    // Include statements
    include 'gamepad.php';
    
    include 'rounds.php';
    
    // Object Intialization
    $pad = new Gamepad();
    $r = new Round();
    


    class Elements {

        /* ***************************************** 
         * Variables
         * *****************************************
         */
         
        /* ***************************************** 
         * Functions
         * *****************************************
         */
         
         // Constructor
         function __construct() {
             //Nothing here
         }
         
         // Get the refresh option
         function getRefresh() {
            header("refresh:1.5;");
         }
         
         // Get boiler plate
         function getBoilerPlate() {
             echo "<!DOCTYPE html>
                    <html lang='en'>";
         }
         
         // Get header - USE ONLY WITH INDEX.PHP
         function getHeaderIndex() {
            echo '<head>
            <meta charset="utf-8"/>
            <link href="css/styles.css" rel="stylesheet" type="text/css" />
            <!-- Google Icons -->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet">
            <title>Simon Says!</title>
            </head>
            <body>';
         }
         
         // Get header - USE WITH EVERYTHING ELSE
         function getHeader() {
             echo '<head>
            <meta charset="utf-8"/>
            <link href="../css/styles.css" rel="stylesheet" type="text/css" />
            <!-- Google Icons -->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet">
            <title>Simon Says!</title>
            </head>
            <body>';
         }
         
         // Get main heading
         function getMainHeading() {
            echo '<!-- Main Heading -->
            <div id="gameTitle">
                <h1>Simon Says</h1>
            </div>';
         }
         
         // Get Game Area - USE WITH EVERYTHING ELSE
         function getGameAreaDefault() {
             echo '<!-- Play Area -->
            <div id="gameArea">';
            $GLOBALS['$pad']->getRegularGamepad();
            $GLOBALS['$r']->displayRounds();
            echo '</div>';
         }
         
         // Get Game Area - USE ONLY WITH INDEX
         function getGameAreaIndex() {
             echo '<!-- Play Area -->
            <div id="gameArea">';
            $pad->getIndexGamepad();
            $r->displayEmptyRounds();
            echo '</div>';
         }
         
         //Get Button Area - USE ONLY WITH INDEX
         function getButtonAreaIndex() {
            echo '<!-- Button Area -->
            <div id="buttonArea">
                <!-- Button Bar - The bar where are all the buttons are held -->
                <form id="buttonBar" action="./inc/functions.php" method="POST">
                    <!-- Buttons -->
                    <a id="playBtn" href="./inc/play.php">Play</a>
                    <a id="quitBtn" href="">Quit</a>
                </form>
            </div>';
         }
         
         //Get Button Area - USE WITH EVERYTHING ELSE
         function getButtonArea() {
            echo '<!-- Button Area -->
            <div id="buttonArea">
                <!-- Button Bar - The bar where are all the buttons are held -->
                <form id="buttonBar" action="./inc/functions.php" method="POST">
                    <!-- Buttons -->
                    <a id="playBtn" href="">Play</a>
                    <a id="quitBtn" href="./inc/quit.php">Quit</a>
                </form>
            </div>';
         }
         
         // Get closing HTML
         function getClosingHtml() {
            echo '</body>
            </html>';
         }
}
?>