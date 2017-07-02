<?php
//COOKIE
setcookie('leeftijd', $username, time() + (3600 * 24 * 7));

$username = strip_tags($_COOKIE['username']);
echo 'Welkom' . $username . '<br>';

session_start();

if (!isset($_SESSION['id'])) {
    if (isset($_COOKIE['id']) && isset($_COOKIE['username'])) {
        $_SESSION['id'] = $_COOKIE['id'];
        $_SESSION['username'] = $_COOKIE['username'];
    }
}



$_SESSION['username'] = 'Banksy';
echo 'Hallo' . $_SESSION['username'];

//SESSIONS

$dbc = mysqli_connect('localhost', '23741_username', '23741_password', 'myband');
$username = mysqli_real_escape_string($dbc, trim($_POST['username']));
$password = mysqli_real_escape_string($dbc, trim($_POST['password']));
$password = hash('sha512',$password);

if (!empty($username) && !empty($password)) {
    $query = "SELECT * FROM users WHERE username = '$username' AND password = 'password'";
    $result = mysqli_query($dbc, $query);

    if (mysqli_num_rows($result) ==1) {
        $row = mysqli_fetch_array($result);

        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];

        setcookie('id', $row['id'], time() + (60 * 60 * 24 * 30 ));
        setcookie('username', $row['username'], time() + (60 * 60 * 24 * 30 ));

        header('Location: index.php');
    }
}