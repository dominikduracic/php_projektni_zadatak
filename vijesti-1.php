<?php
// Provjera je li sesija vec pokrenuta
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
	<head>
		
		
		<link rel="stylesheet" href="style.css">
		
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="Pratite sve vijesti vezane uz poslovanje i najavu novih atrakcija tvrtke Gorica putovanja d.o.o.">
        <meta name="keywords" content="web, HTML, CSS, aplikacije, zadatak, projektni, vijesti, novosti, news">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<title>Gorica Putovanja - Vijesti</title>
	</head>
<body>

<header>
    <nav>
        <ul>
		<div class="slikica"></div>
            <li><a href="index.php">Početna</a></li>
            <li><a href="vijesti.php">Vijesti</a></li>
            <li><a href="o-nama.php">O nama</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
            <li><a href="galerija.php">Galerija</a></li>

            <?php
            if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
                echo '<li><a href="registracija.php">Registracija</a></li>';
                echo '<li><a href="login.html">Prijava</a></li>';
            } else {
                echo '<li class="greeting-logout-container">';
                echo '<span id="greeting-message" style="color: white; text-align: right;">Dobar dan, ' . $_SESSION['username'] .'!</span>';

                echo '<a id="logout-link" href="logout.php">Odjava</a>';
                echo '</li>';
            }
            ?>
        </ul>
    </nav>
</header>
	
	<main>
		<h1>VIJESTI</h1>
		<div id="vijesti_gallery">
			<figure id="1">
				<img src="vijesti/vijesti-1.jpg" alt="title picture 1" title="title picture 1">
				<figcaption>Kanada, Toronto.<figcaption>
			</figure>
			<figure id="2">
				<img src="vijesti/vijesti1-2.jpg" alt="title picture 2" title="title picture 2">
				<figcaption>Zastava Kanade<figcaption>
			</figure>
		</div>
		<hr>
		<div class="news">
			<h2>Sjajne vijesti! Pokrenuli smo suradnju s hotelom Bojan d.o.o.</h2>
			<p class="description">Hrvatski lanac hotela Bojan i Gorica Putovanja pokrenuli su međusobnu suradnju.</p>
			<p>Od sada pa nadalje pomoću nas možete ostvariti dvadeset posto popusta na noćenje u hotelima Bojan.</p>
			<p>Navedeni popust odnosi se na razdoblje od 1. ožujka od 1. lipnja 2023.</p>
			<p>Također, kupnjom tri ili više karti (noćenja), četvrtu kartu dobivate gratis.</p>
			<p>Napominjemo kako gratis kartu možete iskoristiti unutar 5 radnih dana.</p>
			<p>Hoteli Bojan i Gorica Putovanja.</p><br>
			<p><time datetime="2022.-9-9">9. rujna 2022.</time></p><br>
			<p><a href="vijesti.php">Nazad na vijesti</a></p>
		</div>
	<footer>
		<p>Copyright &copy; 2024. Gorica Putovanja d.o.o. by Dominik Đuračić. <a href="https://github.com/dominikduracic/php_projektni_zadatak/" target="_blank"><img src="img/GitHub-Mark-Light-32px.png" title="Github" alt="Github"></a></p>
	</footer>
</html>
