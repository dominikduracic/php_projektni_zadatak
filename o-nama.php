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
		<h1>O nama</h1>
		<h2>Turistička agencija Gorica putovanja d.o.o.</h2>
		<video width="50%" controls poster="img/video" >
		  <source src="video/video.mp4" type="video/mp4">
		  Your browser does not support HTML5 video.
		</video>
		<p>Gorica Putovanja turistika je agencija osnovana 2004. godine sa sjedištem u Velikoj Gorici.</p>
		<p>Osim organiziranja turističkih putovanja, uz pomoć naših partnera bavimo se i prodajom avionskih karata za destinacije u Republici Hrvatskoj.</p>
		<p>Avionske karte prodajemo isključivo u našoj poslovnici. Za više informacija možete nas kontaktirati.</p>
	</main>
	<footer>
		<p>Copyright &copy; 2024. Gorica Putovanja d.o.o. by Dominik Đuračić. <a href="https://github.com/dominikduracic/php_projektni_zadatak/" target="_blank"><img src="img/GitHub-Mark-Light-32px.png" title="Github" alt="Github"></a></p>
	</footer>
</body>
</html>
