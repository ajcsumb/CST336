<?php
    function getTitleBar() {
        echo '<!-- Title Bar -->
        <div id="titleBar">
            <h1>Farm Explorer</h1>
            <a id="play" href="play.php">Play</a>
            <a id="quit" href="quit.php">Quit</a>
        </div>';
    }
    
    function getBackBar() {
        echo '<!-- Title Bar -->
        <div id="titleBar">
            <h1>Farm Explorer</h1>
            <a id="back" href="../play.php">Back</a>
        </div>';
    }
?>