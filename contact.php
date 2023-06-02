<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Contact-page</title>
    <link href="./style/main.css" rel="stylesheet" />
<link href="./style/contact.css" rel="stylesheet" />
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
    <div class="discussion-container">
            <div class="faq-section">
                <h1>Frequently Asked Questions</h1>
                <ul class="faq-list">
                    <li>
                        <div class="question">
                            <span class="question-text">Wat is een algoritme?</span>
                            <span class="toggle-icon">▼</span>
                        </div>
                        <div class="answer">
                            <p>Een algoritme is een stapsgewijze procedure of een reeks instructies die worden gevolgd om een specifiek probleem op te lossen of een taak uit te voeren. 
                                Het is als een recept dat beschrijft hoe je een bepaald resultaat kunt bereiken.</p>
                        </div>
                    </li>
                    <li>
                        <div class="question">
                            <span class="question-text">Wat is het verschil tussen software en hardware?</span>
                            <span class="toggle-icon">▼</span>
                        </div>
                        <div class="answer">
                            <p>Software verwijst naar de verzameling programma's, gegevens en instructies die op een computer worden uitgevoerd, terwijl hardware de fysieke componenten van een computer of elektronisch apparaat omvat, 
                                zoals de processor, geheugenmodules, harde schijf en het toetsenbord.</p>
                        </div>
                    </li>
                    <li>
                        <div class="question">
                            <span class="question-text">Wat is het verschil tussen een compiler en een interpreter</span>
                            <span class="toggle-icon">▼</span>
                        </div>
                        <div class="answer">
                            <p>Een compiler en een interpreter zijn beide softwaretools die worden gebruikt om broncode om te zetten in uitvoerbare instructies, maar ze werken op verschillende manieren. 
                                Een compiler vertaalt de volledige broncode naar een uitvoerbaar bestand voordat het programma wordt uitgevoerd. Het produceert vaak efficiëntere code, maar vereist een aparte compilatiestap voordat het programma kan worden uitgevoerd. 
                                Een interpreter daarentegen vertaalt de broncode regel voor regel tijdens de uitvoering. Het voert de instructies direct uit zonder een apart compilatieproces, maar kan over het algemeen minder efficiënte uitvoering bieden in vergelijking met een compiler.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="discussion-section">
                <h1>Contact</h1>
                <form>
                    <label for="name" class="input-label">Naam: <input type="text" id="name" class="input-field"></label>
                
                    <label for="email" class="input-label">E-mailadres: <input type="email" id="email" class="input-field"></label>
                
                    <label for="message" class="input-label">Bericht: <textarea id="message" class="message-field"></textarea></label>
                
                    <button type="submit" class="submit-btn">Verzenden</button>
                </form>  
            </div> 
        </div>
        <footer class="footer">
        <div class="inner-container1">
            <div class="footer-links">
                <ul>
                <li><a href="contact.php">Contact</a></li> 
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
    <script src="js/contact.js"></script>
</body>
</html>