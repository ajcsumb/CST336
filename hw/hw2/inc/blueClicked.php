<?php
    include 'boilerplate.php';
    include 'headerNoCssOpen.php';
    include 'cssLocation.php';
    include 'headerNoCssClosed.php';
    include 'mainHeading.php';
    include 'openEmptyGamepad.php';
    include 'greenpad.php';
    include 'redpad.php';
    include 'yellowpad.php';
    echo '<a class="active-pad4"></a>';
    echo "<audio autoplay>
            <source src='../sounds/blue.mp3' type='audio/mpeg'>Your browser does not support the audio element.</audio>";
    include 'closeEmptyGamepad.php';
    include 'buttonArea.php';
    include 'closingHtml.php';
?>