<?php
    include 'boilerplate.php';
    include 'headerNoCssOpen.php';
    include 'cssLocation.php';
    include 'headerNoCssClosed.php';
    include 'mainHeading.php';
    include 'openEmptyGamepad.php';
    include 'greenpad.php';
    echo '<a class="active-pad2"></a>';
    echo "<audio autoplay>
            <source src='../sounds/red.mp3' type='audio/mpeg'>Your browser does not support the audio element.</audio>";
    include 'yellowpad.php';
    include 'bluepad.php';
    include 'closeEmptyGamepad.php';
    include 'buttonArea.php';
    include 'closingHtml.php';
?>