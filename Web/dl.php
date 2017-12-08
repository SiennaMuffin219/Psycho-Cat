<!DOCTYPE html>

<?php
	if (!empty($_GET["download"]))
	{
		echo "<script type='text/javascript'>alert("42");</script>";
		header("Content-disposition: attachment;filename=$_GET["download"]);
		readfile($_GET["download"]);
	}
?>


<html>
<head>
	<link rel="stylesheet" type="text/css" href="asset/style.css">
	<link rel="icon" type="image/ico" href="asset/images/voiture.ico">
	<title>Titre, telechargement</title>
</head>
<body>
	<header><img id="banner" src="asset/images/banner.jpg"></header>
	<div id="Men">
		<ul id="Menu">
			<li><a href="stat.php">Statistiques</a></li>
			<li><a href="guide.html">Guide</a></li>
			<li><a href="dl.php">Download</a></li>
		</ul>
	</div>
	<p style="background-color: white;">
		Telechargement




	</p>
	<footer>
		<a id="Lien" href="404.php">Qui ne sommes nous pas ?</a>
		<div id="Img">
			<a href="https://iut.univ-lyon1.fr/"><img class="im" src="asset/images/iut.jpg"></a>
			<a href="https://www.nuitdelinfo.com/"><img class="im" src="asset/images/singe.svg"></a>
		</div>
		<p id="rigth" style="color:white">Copyrigth : Psycho-Cat</p>
	</footer>
</body>
</html>
