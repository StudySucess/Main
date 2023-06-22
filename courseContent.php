<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link href="./style/main.css" rel="stylesheet" />
    <link href="./style/courseContent.css" rel="stylesheet" />
    <title>Course</title>
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
        <div class="side_Buttons">
            <div class="createPost">
            <img src="images/example/comment-post.png" alt="">
            </div>
            <div class="favourites">
            <img src="images/example/favourite.png" alt="">
            </div>
        </div>
    </header>
    <main>
        <div class="courseCover">
            <div class="titleBg">
                <img src="images/example/DBFundamentals.png" alt="">
                <h1 class="classTitle">Database fundamentals</h1>
                <div class="canvasLink">
                    <a href="https://canvas.ehb.be/courses/29375" class="canvasBtn"></a>
                    <p>Externe Canvas cursus link</p>
                </div>
            </div>
        </div>
        
        <div class="courseContent-container">
            <!-- Possible future bg change 
            <div class="courseBg">
            <img src= alt="">
            </div> -->
            
            <div class="post">
                <div class="postHeader">
                <h2>Post title</h2>
                <h3>created by</h3>
                </div>
                <div class="postBody">
                <p>HEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEENK</p></div>
                <div class="postFooter">
                    <p class="file_count_post">2</p>
                    <!-- FILE DOWNLOAD? -->
                    <div class="icon_file">
                        <img src="images/example/file_image.png" alt="">
                    </div>
                    <div class="icon_like">
                        <img src="images/example/thumbs-up.png" alt="">
                    </div>
                    <div class="like_count">
                        0
                    </div>
                    <div class="icon_dislike">
                        <img src="images/example/thumbs-down.png" alt="">
                    </div>
                    <div class="dislike_count">
                        0
                    </div>
                    <div class="reply">
                        <img src="images/example/comment-reply.png" alt="">
                    </div>
                    <div class="add_favourite">
                        <img src="images/example/favourite-add.png" alt=""> 
                    </div>
                    <div class="upload_file">
                        <img src="images/example/file-upload.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>