<?php
// Provjera je li sesija vec pokrenuta
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
	<head>

	
		<div class="slikica"></div>
		
		<link rel="stylesheet" href="style.css">
		
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="Kontakt stranica">
        <meta name="keywords" content="web, HTML, CSS, aplikacije, zadatak, projektni, kontakt, pitanja, pomoć">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<title>Gorica Putovanja - Vijesti</title>
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
		<h1>Kontakt obrazac</h1>
		<div id="contact">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2785.8334769939374!2d16.071671715720257!3d45.71437742473571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47667e651523bb97%3A0x4605856500ef64b3!2sZagreba%C4%8Dka%20Ul.%205%2C%2010410%2C%20Velika%20Gorica!5e0!3m2!1shr!2shr!4v1673020116779!5m2!1shr!2shr" width="100%" height="400 style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			<form action="http://gorica-putovanja/pwa/responzive-page/send-contact.php" id="contact_form" name="contact_form" method="POST">
				<label for="fname">Ime *</label>
				<input type="text" id="fname" name="firstname" placeholder="Unesite ime..." required>

				<label for="lname">Prezime *</label>
				<input type="text" id="lname" name="lastname" placeholder="Unesite prezime..." required>
				
				<label for="lname">Kontakt e-mail *</label>
				<input type="email" id="email" name="email" placeholder="Unesite Vaš e-mail.." required>

				<label for="country">Država</label>
				<select id="country" name="country">
				  <option value="">Molimo odaberite</option>
				  <option value="BE">Belgija</option>
				  <option value="HR" selected>Hrvatska</option>
				  <option value="LU">Luksemburg</option>
				  <option value="HU">Mađarska</option>
				</select>

				<label for="subject">Predmet</label>
				<textarea id="subject" name="subject" placeholder="Napišite komentar..." style="height:200px"></textarea>

				<input type="submit" value="Podnesi">
			</form>
		</div>
	</main>
	<footer>
		<p>Copyright &copy; 2024. Gorica Putovanja d.o.o. by Dominik Đuračić. <a href="https://github.com/dominikduracic/php_projektni_zadatak/" target="_blank"><img src="img/GitHub-Mark-Light-32px.png" title="Github" alt="Github"></a></p>
	</footer>
</body>
</html>
