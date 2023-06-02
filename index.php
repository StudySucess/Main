<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./style/main.css">
    <link href="./style/index.css" rel="stylesheet" />
    <title>Home page</title>
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
            <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                $username = $_SESSION["username"];
                echo '<li><span class="username">' . $username . '</span></li>';
                echo '<li><a href="logOut.php">logout</a></li>';
            } else {
                echo '<li><button onclick="window.location.href=\'logIn.php\';" class="logInBtn">Log in</button></li>';
            }
            ?>
        </ul>
    </header>
    <main>
        <div class="bgCover">
            <h1 class="welcomeMsg">
                <?php
                if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                    echo "Welcome, " . $username . "!";
                }
                ?>
            </h1>
            <div class="intro">
                <h1>StudySuccesHub</h1>
                <p>Het portaal voor studenten om jouw studiemateriaal, vragen en ervaringen te delen met
                    je medestudenten!
                </p>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="inner-container1">
            <div class="footer-links">
                <ul>
                    <li>Contact</li> 
                    <li><a href="about.php">Over ons</a></li>
                    <li><a href="https://login.ehb.be/login">Canvas</a></li>
                    <li><a href="index.php">Home</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <ul>
                    <li><a href="https://www.facebook.com/erasmushogeschool" target="_blank"><span class="icon-facebook2"></span></a></li>
                    <li><a href="https://www.youtube.com/user/ehbrussel" target="_blank"><span class="icon-youtube1"></span></a></li>
                    <li><a href="https://www.linkedin.com/school/erasmushogeschool-brussel/" target="_blank"><span class="icon-linkedin1"></span></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-contact">
            <p>Bel 02 523 37 37</p>
            <p>Mail info@ehb.be</p>
        </div>
        <div class="footer-copy">
            <p>&copy; StudySuccesHub2023</p>
        </div>
        <div class="collaboration">
            <p>Collaboration with Erasmushogeschool Brussel</p>
        </div>
    </footer>
</body>

</html>