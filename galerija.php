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
        <meta name="description" content="Galerija i fotografije putovanja i sl.">
        <meta name="keywords" content="web, HTML, CSS, aplikacije, zadatak, projektni, galerija, slike, fotografije">
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
		<h1>Galerija</h1>
		<div id="gallery">
			<figure id="1">
				<img src="gallery/04_sibirien_baikalarm_blau.jpg" alt="Rusija, sibir." title="Rusija, sibir." onclick="window.open('gallery/04_sibirien_baikalarm_blau.jpg', '_blank');">
				<figcaption>Sibir, Rusija - ljeto.<figcaption>
			</figure>
			<figure id="2">
				<img src="gallery/5cd9236f85600a778807fb43.jpg" alt="Sibir" title="Sibir" onclick="window.open('gallery/5cd9236f85600a778807fb43.jpg', '_blank');">
				<figcaption>Sibir, Rusija - zima.<figcaption>
			</figure>
			<figure id="3">
				<img src="gallery/62426721.jpg" alt="KanadaPriroda" title="KanadaPriroda" onclick="window.open('gallery/62426721.jpg', '_blank');">
				<figcaption>Predivna kanadska priroda.<figcaption>
			</figure>
			<figure id="4">
				<img src="gallery/ac5ac0_Barcelona - -La-Sagrada-Familia.jpg" alt="Crkva" title="Crkva" onclick="window.open('gallery/ac5ac0_Barcelona - -La-Sagrada-Familia.jpg', '_blank');">
				<figcaption>Barcelona, La Sagrada Familia.<figcaption>
			</figure>
			<figure id="5">
				<img src="gallery/iStock_000002178004XSmall-1.jpg" alt="Autobus1" title="Autobus1" onclick="window.open('gallery/iStock_000002178004XSmall-1.jpg', '_blank');">
				<figcaption>Jedan od naših autobusa.<figcaption>
			</figure>
			<figure id="6">
				<img src="gallery/Kanada_zastava.jpg" alt="ZasKan" title="ZasKan" onclick="window.open('gallery/Kanada_zastava.jpg', '_blank');">
				<figcaption>Zastava Kanade.<figcaption>
			</figure>
			<figure id="7">
				<img src="gallery/neoplan-cityliner - autobus-godine-2022-637698242302817893_1600_900.jpg" alt="Autobus2" title="Autobus2" onclick="window.open('gallery/neoplan-cityliner - autobus-godine-2022-637698242302817893_1600_900.jpg', '_blank');">
				<figcaption>Jedan od naših najboljih autobusa.<figcaption>
			</figure>
			<figure id="8">
				<img src="gallery/Spanjolska.jpg" alt="SpanKar" title="SpanKar" onclick="window.open('gallery/Spanjolska.jpg', '_blank');">
				<figcaption>Španjolska na karti..<figcaption>
			</figure>
			<figure id="9">
				<img src="gallery/sss0002.jpg" alt="SpanZas" title="SpanZas" onclick="window.open('gallery/sss0002.jpg', '_blank');">
				<figcaption>Zastava Španjolske.<figcaption>
			</figure>
			<figure id="10">
				<img src="gallery/vancouver.jpg" alt="VanKan" title="Chameleon" onclick="window.open('gallery/vancouver.jpg', '_blank');">
				<figcaption>Vancouver, Kanada.<figcaption>
			</figure>
		</div>
	</main>
	<footer>
		<p>Copyright &copy; 2024. Gorica Putovanja d.o.o. by Dominik Đuračić. <a href="https://github.com/dominikduracic/php_projektni_zadatak/" target="_blank"><img src="img/GitHub-Mark-Light-32px.png" title="Github" alt="Github"></a></p>
	</footer>
</body>
</html>
