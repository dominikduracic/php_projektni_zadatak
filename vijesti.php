<?php
// Provjeri je li korisnik prijavljen
session_start();
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
?>

<!DOCTYPE html>
<html lang="hr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Vaše vijesti...">
    <meta name="keywords" content="web, HTML, CSS, vijesti">
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

    <?php
    // Ako korisnik nije prijavljen, prikazuje se poruka i poveznice na prijavu i registraciju
    if (!$isLoggedIn) {
        echo '<p>Morate se prijaviti ili registrirati kako biste vidjeli sadržaj.';

        // hiperveze na stranice prijave i registracije
        echo ' <a href="login.html">Prijavite se</a> ili <a href="registracija.php">registrirajte</a>.</p>';
    } else {
        // Ako je korisnik prijavljen, prikazuje se  banner i ostatak contenta
    ?>



    
    <main>
		<h1>VIJESTI</h1>
		<div class="vijesti">
			<a href="vijesti-5.html"><img src="vijesti/vijesti-5.jpg" alt="Španjolska - stižemo!" title="Španjolska - stižemo!"></a>
			<h2>Španjolska - stižemo!</h2>
			<p>Obucite se laganije jer naša nova hit ljetna destinacija je Španjolska! <a href="vijesti-5.html">Više ...</a></p>
			<p><time datetime="2023-1-2">2. siječnja 2023.</time></p>
			<hr>
			<a href="vijesti-4.html"><img src="vijesti/vijesti-4.jpg" alt="Zima dolazi" title="Zima dolazi"></a>
			<h2>Rusija, Sibir</h2>
			<p>Naša nova zimska destinacija je Rusija! Sibir! Obucite se toplije! <a href="vijesti-4.html">Više ...</a></p>
			<p><time datetime="2022-12-22">22. prosinca 2022.</time></p>
			<hr>
			<a href="vijesti-3.html"><img src="vijesti/vijesti-3.jpg" alt="Idemo u Portugal" title="Idemo u Portugal"></a>
			<h2>Idemo u Portugal</h2>
			<p>Naša nova eurospka destinacija je Lisabon, Portugal! Pripremite se jer - polijećemo! <a href="vijesti-3.html">Više ...</a></p>
			<p><time datetime="2022-11-21">21. studenog 2022.</time></p>
			<hr>
			<a href="vijesti-2.html"><img src="vijesti/vijesti-2.jpg" alt="Hotel Bojan d.o.o." title="Hotel Bojan d.o.o."></a>
			<h2>Sjajne vijesti! Pokrenuli smo suradnju s hotelom Bojan d.o.o.</h2>
			<p>Od sada naši klijenti imaju pravo na 20 posto popusta na noćenje u hotelima Bojan! <a href="vijesti-2.html">Više ...</a></p>
			<p><time datetime="2022.-9-12">9. rujna 2022.</time></p>
			<hr>
			<a href="vijesti-1.html"><img src="vijesti/vijesti-1.jpg" alt="Doviđenja, Kanada!" title="Doviđenja, Kanada"></a>
			<h2>Više ne prodajemo avio karte za Kanadu</h2>
			<p>Utjecajem nepravilnosti na tržištu nažalost avio karte za Kanadu više nisu u našoj ponudi. <a href="vijesti-1.html">Više ...</a></p>
			<p><time datetime="2022-8-8">8. kolovoza 2022.</time></p>
			<hr>
		</div>
	</main>

    <?php
    }
    ?>

    <footer>
        <p>Copyright &copy; 2024. Gorica Putovanja d.o.o. by Dominik Đuračić. <a href="https://github.com/dominikduracic/php_projektni_zadatak/" target="_blank"><img src="img/GitHub-Mark-Light-32px.png" title="Github" alt="Github"></a></p>
    </footer>
</body>

</html>
