<?php


session_start();


session_unset();


session_destroy();

// Preusmjeri na homepage
header("Location: index.php");
exit();
?>
