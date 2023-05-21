<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link href="./style/main.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <header class="header headerGradient">
        <ul class="listItems">
            <li><a href="index.html"><img src="images/SSHLogo.png" class="headerLogo"></a></li>
            <li><a href="overview.html">Overzicht</a></li>
            <li>
                <a href="classes.php">Vakken</a>
                <a href=""><img src="images/header/dropdownSel.svg"></a>
            </li>
            <li><a href="experiences.html">Ervaringen</a></li>
            <li class="searchElement">
                <a href="search.html"><img></a>
                <input type="text" class="searchBar" placeholder="Zoek studiemateriaal / posts">
                <div class="searchSymbol"></div>
            </li>
            <li><a href="about.html">Over ons</a></li>
            <li>
                <button onclick="window.location.href='logIn.html';" class="logInBtn">Log in</button>
            </li>
        </ul>
    </header>

    <div class="bgCover"></div>
</body>

</html>