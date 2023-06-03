<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=SeoulNamsan&display=swap" rel="stylesheet" />
        <link href="./style/profile.css" rel="stylesheet" />
        <title>Document</title>
    </head>
    <body>
        <nav class="melding">
            <img src="images/profile/icons8-add-to-chat-32.png">
            <img src="images/profile/icons8-notification-32.png">
        </nav>
        <div class="navigation">
            <h1>Uw Profile</h1>
            <nav class="links">
                <ul>
                    <li><a href="#">Mijn Profile</a></li>
                    <li><a href="#">Favorite</a></li>
                    <li><a href="#">Uploaden</a></li>
                    <li><a href="#">Berichten</a></li>
                </ul>
            </nav>
            <p id="schoolnaam" >schoolnaam</p>
        </div>
        <main>
            <div class="imgProfile">
                <img src="images/v1090_4832.png">
                <h3>&nbsp; Change profile <br> &nbsp; &nbsp; &nbsp; &nbsp; picture</h3>
            </div>
            <div class="edit_profile">
                <form action="#">
                    <div class="inputs">
                        <label for="username">Username</label>
                        <input type="text" name="username">
                    </div>
                    <div class="inputs">
                        <label for="email">Email</label>
                        <input type="email" name="email">
                    </div>
                    <div class="inputs">
                        <label for="password">Password</label>
                        <input type="password" name="password">
                    </div>
                    <div class="submitbtn">
                        <input type="submit" value="Submit" id="submit">
                    </div>
                </form>
            </div>
        </main>
    </body>
    </html>