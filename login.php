<?php
// Provjera je li sesija vec pokrenuta
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $xmlFile = "users.xml";

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (file_exists($xmlFile)) {
        $xml = simplexml_load_file($xmlFile);

        foreach ($xml->user as $user) {
            if ($user->username == $username) {
                if (password_verify($password, $user->password)) {
                    // Postavlja se sesija nakon uspjesne prijave
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                
                    // Provjeri postoji li prethodna URL adresa u sesiji
                    $redirect_url = isset($_SESSION['redirect_url']) ? $_SESSION['redirect_url'] : 'index.php';

                    // Preusmjeri korisnika na prethodnu stranicu ili na homepage
                    header("Location: " . $redirect_url);
                    exit;
                } else {
                    echo "Neuspješna prijava. Provjerite korisničko ime i lozinku.";
                    exit;
                }
            }
        }

        echo "Neuspješna prijava. Provjerite korisničko ime i lozinku.";
    } else {
        echo "Neuspješna prijava. Provjerite korisničko ime i lozinku.";
    }
} else {
    echo "Nedozvoljen pristup!";
}
?>
