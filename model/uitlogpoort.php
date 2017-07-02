<?php
session_start();
// ALS DE VARIABELE ID BESTAAT...
if (isset($_SESSION['id'])) {
    // SESSIEVARIABELEN VERNIETIGEN
    $_SESSION = array();
    // COOKIE MET SESSION-ID VERNIETIGEN
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 3600);
    }
    // SESSIE VERNIETIGEN
    session_destroy();
}
// COOKIES MET ID EN USERNAME VERNIETIGEN
setcookie('id', '', time() - 3600);
setcookie('username', '', time() - 3600);
//TERUG NAAR DE HOMEPAGE
header("Location:index.php");