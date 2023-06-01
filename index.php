<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./style/main.css">
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
            <p>
                <?php
                if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                    echo "Welcome, " . $username . "!";
                }
                ?>
            </p>
        </div>
    </main>
</body>

</html>