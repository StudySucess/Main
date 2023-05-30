<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="./style/main.css" rel="stylesheet" />
	<link href="./style/createPost.css" rel="stylesheet" />
	<title>Post</title>
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
	<main>
		<div class="post-box">
			<h3>Een nieuwe post aanmaken</h3>
			<form class="flexContainer">
				<div class="selections">
					<div>
						<label for="post-type">Soort post</label><br>
						<select id="post-type">
							<option disabled selected value="d">-- Kies soort post --
							</option>
							<option>Vraag</option>
							<option>Samenvatting</option>
							<option>Cheatsheet</option>
							<option>Stage-ervaring</option>
							<option>Andere</option>
						</select>
					</div>
					<div>
						<label for="post-course">Vak</label><br>
						<select id="post-course">
							<option disabled selected value>-- Kies een vak --</option>
							<option>IT-essentials</option>
							<option>Java Advanced</option>
							<option>Java Frameworks</option>
							<option>OSFundamentals</option>
							<option></option>
						</select>
					</div>
					<div>
						<label for="post-category">Categorie - <i>Optioneel</i></label><br>
						<select id="post-category">
							<option selected value>-- Kies een categorie --</option>
							<option>IT</option>
							<option>Taal</option>
							<option>Technologie</option>
							<option>Ingenieur</option>
						</select>
					</div>
				</div>



				<input type="text" id="post-title" name="post-title" placeholder="Titel">

				<textarea id="post-desc" name="post-text" placeholder="Beschrijving" rows="5"></textarea>
				<div>
					<label for="post-upload">Bijlage(n)</label><br>
					<input id="post-upload" type="file">
				</div>

				<input type="submit" value="Post">
			</form>
		</div>
	</main>
	<section>

	</section>
	<script src="script.js"></script>
</body>

</html>