<?php
    include './inc/staticElements.php';
    
    // Create new staticElements object
    $e = new Elements();
    
    // Construct page
    $e->getBoilerplate();
    $e->getHeaderIndex();
    $e->getMainHeading();
    $e->getGameAreaIndex();
    $e->getButtonAreaIndex();
    $e->getClosingHtml();
?>