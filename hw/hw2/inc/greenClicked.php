<?php
    include 'boilerplate.php';
    include 'headerNoCssOpen.php';
    include 'cssLocation.php';
    include 'headerNoCssClosed.php';
    include 'mainHeading.php';
    include 'openEmptyGamepad.php';
    echo '<a class="active-pad1"></a>';
    echo "<audio autoplay>
            <source src='../sounds/green.mp3' type='audio/mpeg'>Your browser does not support the audio element.</audio>";
    include 'redpad.php';
    include 'yellowpad.php';
    include 'bluepad.php';
    include 'closeEmptyGamepad.php';
    include 'buttonArea.php';
    include 'closingHtml.php';
?>