<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link href="./style/main.css" rel="stylesheet" />
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
            <li>
                <?php
                if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                    $username = $_SESSION["username"];
                    echo '<span class="username">' . $username . '</span>'; // Display the username
                } else {
                    echo '<button onclick="window.location.href=\'logIn.php\';" class="logInBtn">Log in</button>'; // Display the login button
                }
                ?>
            </li>
        </ul>
    </header>

    <main class="bgCover">
        <p>
            <?php
            // Check if the user is logged in
            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                $username = $_SESSION["username"];
                echo "Welcome, " . $username . "!"; // Display the welcome message
            }
            ?>
        </p>
    </main>
</body>
</html>
