<?php
    include 'boilerplate.php';
    include 'headerNoCssOpen.php';
    include 'cssLocation.php';
    include 'headerNoCssClosed.php';
    include 'mainHeading.php';
    include 'openEmptyGamepad.php';
    include 'greenpad.php';
    include 'redpad.php';
    echo '<a class="active-pad3"></a>';
    echo "<audio autoplay>
            <source src='../sounds/yellow.mp3' type='audio/mpeg'>Your browser does not support the audio element.</audio>";
    include 'bluepad.php';
    include 'closeEmptyGamepad.php';
    include 'buttonArea.php';
    include 'closingHtml.php';
?>