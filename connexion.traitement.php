<? 
include './functions.php';
$utilisateur=loginValid();
//var_dump($utilisateur) ;



foreach ($utilisateur as $key=>$value){
//$_SESSION[ $key]=$value;
setcookie($key, $value,  [
    'httpOnly' => true,
    'secure' => true,
    'expires' => time() + 180 * 24 * 3600,
]);
$_COOKIE[$key] = $value;
}
include './inc/head.inc.php';            
//var_dump($_COOKIE) ;  

include './inc/navbar.inc.php';

?>


<main>
<H1> Bienvenue <?=$utilisateur['nom'] ?>  <?=$utilisateur['prenom'] ?> </H1>
</main>

<? include './inc/footer.inc.php' ?>