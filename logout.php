<?

include './functions.php';
include './inc/head.inc.php';

/* setcookie('nom', '',  [
    'expires' => 1,
]);
setcookie('log', '',  [
    'expires' => 1,
]);
setcookie('prenom', '',  [
    'expires' => 1,
]);
unset($_COOKIE['nom']);
unset($_COOKIE['log']);
unset($_COOKIE['prenom']); */

foreach ($_COOKIE as $key => $value) {
    setcookie($key, '',  [
        'expires' => 1,
    ]);
    unset($_COOKIE[$key]);
}

include './inc/navbar.inc.php';
//session_destroy();
header("Location: ./index.php");
die();
