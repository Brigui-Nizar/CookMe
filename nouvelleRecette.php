<? include './functions.php';
include './inc/head.inc.php';
include './inc/navbar.inc.php';
?>


<main>
  <form class="row g-2  justify-content-center" action="./nouvelleRecette.traitement.php" method="post">

    <div class="mb-3">
      <label for="formContactMail" class="form-label">Email </label>
      <input type="email" class="form-control" id="formContactMail" name="email" placeholder="email@example.com" required>
    </div>


    <div class="mb-3">
      <label for="formContactTitre" class="form-label">Intitulé</label>
      <input type="text" class="form-control" id="formContactTitre" rows="3" name="title" required></input>
    </div>
    <div class="mb-3">
      <label for="formContactDescription" class="form-label">Description</label>
      <textarea class="form-control" id="formContactDescription" rows="3" name="description" required></textarea>
    </div>
    <div class="mb-3">
      <label for="formUrl" class="form-label">Image Url</label>
      <input type="text" class="form-control" id="formUrl" rows="3" name="imageUrl" required></input>
    </div>

    <!--   <div class="mb-3">
      <label for="formDifficulte" class="form-label">Difficulté</label>
      <input type="text" class="form-control" id="formDifficulte" rows="3"></input>
    </div> -->

    <div class="mb-3">
      <label for='formDifficulte'>Difficulté</label>
      <select name="difficulty" id="formDifficulte">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>

    </div>

    <div class="mb-3">
      <label for='formPrice'>Prix</label>
      <select name="price" id="formPrice" required>
        <option value=""> </option>
        <option value="€"> €</option>
        <option value="€€">€€</option>
        <option value="€€€">€€€</option>
      </select>

    </div>

    <div class="col-12">
      <button class="btn btn-primary" type="submit">Envoyer</button>
    </div>
  </form>
</main>


<? include './inc/footer.inc.php' ?>