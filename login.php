<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $xmlFile = "users.xml";
    $username = $_POST["username"];
    $password = $_POST["password"];
    $login_successful = false;

    if (file_exists($xmlFile)) {
        $xml = simplexml_load_file($xmlFile);

        foreach ($xml->user as $user) {
            if ($user->username == $username && password_verify($password, $user->password)) {
                // Postavlja se sesija nakon uspješne prijave
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                $login_successful = true;
                break;
            }
        }
    }

    if (!$login_successful) {
        // Neuspješna prijava. Provjerite korisničko ime i lozinku.
        echo '<div style="text-align: center; margin-top: 20px;">';
        echo '<p style="color: #d9534f; font-size: 18px;">Neuspješna prijava. Provjerite korisničko ime i lozinku.</p>';
        // Dodajte gumb za povratak na login.html
        echo '<a href="login.html" style="display: inline-block; padding: 10px 15px; background-color: #5bc0de; color: #fff; text-decoration: none; border-radius: 5px; margin-top: 10px;">Natrag na prijavu</a>';
        echo '</div>';
        exit;
    }

    // Provjeri postoji li prethodna URL adresa u sesiji
    $redirect_url = isset($_SESSION['redirect_url']) ? $_SESSION['redirect_url'] : 'index.php';

    // Preusmjeri korisnika na prethodnu stranicu ili na početnu stranicu
    header("Location: " . $redirect_url);
    exit;
} else {
    echo "Nedozvoljen pristup!";
}
?>
