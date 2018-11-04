<?php

    function getHeader() {
        echo '<head>
        <meta charset="utf-8"/>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
        <link rel="icon" href="./img/farmer.png" type="image/png" sizes="16x16">
        <title>Farm Explorer!</title>
        </head>';
    }
    
    function getHeaderNonIndex() {
        echo '<head>
        <meta charset="utf-8"/>
        <link href="../css/styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
        <link rel="icon" href="./img/farmer.png" type="image/png" sizes="16x16">
        <title>Farm Explorer!</title>
        </head>';
    }
?>