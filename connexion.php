<? include './functions.php';
include './inc/head.inc.php';
include './inc/navbar.inc.php';
//var_dump($_POST) ?>


<main>

  <form class="row g-2  justify-content-center" action="./connexion.traitement.php" method="post">

    <div class="mb-3">
      <label for="formContactMail" class="form-label">Email </label>
      <input type="email" class="form-control" id="formContactMail" name="email" placeholder="email@example.com">
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Mot de passe </label>
      <input type="password" class="form-control" id="password" name="password" >
    </div>

    
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Envoyer</button>
    </div>
  </form>
</main>


<? include './inc/footer.inc.php' ?>