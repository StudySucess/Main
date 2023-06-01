<?php
?>

<!DOCTYPE html>
<html>

<head>
<link href="./style/main.css" rel="stylesheet" />
<link href="./style/about.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <header class="header headerGradient">
        <ul class="listItems">
            <li><a href="index.php"><img src="images/SSHLogo.png" class="headerLogo"></a></li>
            <li><a href="overview.php">Overzicht</a></li>
            <li>
                <a href="classes.php">Vakken</a>
                <a href=""><img src="images/header/dropdownSel.svg"></a>
            </li>
            <li><a href="experiences.php">Ervaringen</a></li>
            <li class="searchElement">
                <a href="search.php"><img></a>
                <input type="text" class="searchBar" placeholder="Zoek studiemateriaal / posts">
                <div class="searchSymbol"></div>
            </li>
            <li><a href="about.php">Over ons</a></li>
            <li>
                <button onclick="window.location.href='logIn.php';" class="logInBtn">Log in</button>
            </li>
        </ul>
    </header>
    <div class="About-section">
        <div class="inner-container">
            <h1>About Us</h1>
            <p class="text">Bij ons draait het allemaal om studenten.<br>
                Onze missie is om een online platform te creëren waar studenten elkaar kunnen ondersteunen, inspireren en versterken tijdens hun studie.<br>
                We willen studenten voorzien van de tools en kansen die ze nodig hebben om hun academische reis te verbeteren en te verrijken.<br>
                Ons doel is om een gemeenschap te creëren waar studenten samenkomen en kennis delen.<br>
                We geloven dat wanneer studenten samenwerken en elkaar helpen, ze in staat zullen zijn om te groeien, te begrijpen en uit te blinken in hun vakgebied.<br>
                We willen studenten aanmoedigen om hun expertise te delen, elkaar te ondersteunen en te leren van de ervaringen van hun medestudenten.
            </p>
            <a href="overview.php"class="readMoreBtn">Read More</a>

        </div>
    </div>
</body>

</html>