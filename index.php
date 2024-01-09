<?php
// Provjera je li sesija vec pokrenuta
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>

<html lang="hr" xmlns="http://www.w3.org/1999/xhtml">

    <head>
		<div class="slikica"></div>
	
		<link rel="stylesheet" href="style.css">  
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="Ova stranica kreirana je kao projektni zadatak za potrebe kolegija Web aplikacije.">
		<meta name="keywords" content="web, HTML, CSS, aplikacije, zadatak, projektni">
		<meta name="author" content="Dominik Đuračić">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<title>GORICA PUTOVANJA</title>
    </head>

<body>
<header>
    <nav>
        <ul>
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

	<h1>GORICA PUTOVANJA d.o.o. - Vaš najbolji turistički prijevoznik!</h1>
		<figure>
			<img src="img/bus.jpg" alt="bus" title="bus">
			<figcaption>GORICA PUTOVANJA d.o.o. je prijevoznička tvrtka sa sjedištem u Velikoj Gorici (<time datetime="2004-03-21">osnovana 21. ožujka 2004. godine</time>),  a sada brojimo 14 inozemnih i 31 tuzemnih turističkih destinacija.</figcaption>
		</figure>

		<p>GORICA PUTOVANJA Vaš je prvi izbor u planiranju putovanja..</p>
		<p>Na temelju dugogodišnjeg isksutva u organizaciji turističkih aranžmana predvodnici smo na tržištu u planiranju budućih top destinacija.</p>
		<p>U 2004. godini (godini osnivanja) brojali smo samo tri tuzmene turističke destinacije, a danas se možemo pohvaliti velikim brojem tuzemnnih, ali i inozemnih destinacija kao i turističkim aranžmanima rađenim po posebnim željama.</p>
		<p>Osim organiziranja turističkih putoavanja, uz pomoć naših partnera bavimo se i prodajom avionskih karata za destinacije u Republici Hrvatskoj, kao i za ostale europske destinacije. Avionske karte prodajemo isključivo u našoj poslovnici. Za više informacija možete nas kontaktirati.</p>
		<p>Surađujemo i s Veleučilištem Velika Gorica (<a href="http://vvg.hr" target="_blank">vvg.hr</a>) te studentima i alumnima istog nudimo turističke paket aranžmane kao i avionske karte po povoljnijoj studentskoj cijeni. Uz to, jednom godišnje radimo nagradnu igru za studente na kojoj možete osvojiti petodnevno putovanje u Bosnu i Hercegovinu.</p>
		<p>Prije tri godine započeli smo suradnju s domaćim hotelima te u svojoj ponudi imamo i razne hotelske promocije i jeftinija noćenja u hotelima u Republici Hrvatskoj. Osim toga, započeli smo s planiranjem i otvaranjem sestrinske tvrtke koja bi se bavila isključivo hotelijarsko-turističkim poslovima na području Republike Hrvatske</p>
		<p>Napominjemo kako se u planiranju turističkih putovanja pridržavamo svih mjera za suzbijanje širenja pandemije koronavirusa.</p><br>
		<p>Društvene mreže:<br>
			<a href="https://www.linkedin.com/in/gorica-putovanja-projekt" target="_blank"><img src="img/linkedin.png" alt="Linkedin" title="Linkedin" style="width:24px; margin-top:0.4em"></a></p>
	</main>
	<footer>
		<p>Copyright &copy; 2024. Gorica Putovanja d.o.o. by Dominik Đuračić. <a href="https://github.com/dominikduracic/php_projektni_zadatak/" target="_blank"><img src="img/GitHub-Mark-Light-32px.png" title="Github" alt="Github"></a></p>
	</footer>

</body>
</html>
