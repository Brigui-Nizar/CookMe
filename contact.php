<? include './functions.php';
 include './inc/head.inc.php';
 include './inc/navbar.inc.php';?>

<main>
<form class="col-6 g-2 " action="" method="post">

<div class="mb-3">
  <label for="formContactMail" class="form-label">Email </label>
  <input type="email" class="form-control" id="formContactMail" placeholder="email@example.com">
</div>
<div class="mb-3">
  <label for="formContactMessage" class="form-label">Votre message</label>
  <textarea class="form-control" id="formContactMessage" rows="3"></textarea>
</div>
<div class="col-12">
    <button class="btn btn-primary" type="submit">Envoyer</button>
  </div>
</form>
</main>


<?include './inc/footer.inc.php' ?>

