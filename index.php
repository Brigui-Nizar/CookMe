<? include './functions.php';

include './inc/head.inc.php';
include './inc/navbar.inc.php'; ?>

<main>
    <div class="row g-2  justify-content-center">

        <form action="" method="post">
            <!--Trier par :-->
            <select name="trie">
                <option value="" <?php if (isset($_POST['trie'])) {
                                        echo $_POST['trie'] == "" ? "selected" : "";
                                    } ?>> </option>
                <option value="intitulé" <?php if (isset($_POST['trie'])) {
                                                echo $_POST['trie'] == "intitulé" ? "selected" : "";
                                            } ?>> intitulé</option>
                <option value="difficulte" <?php if (isset($_POST['trie'])) {
                                                echo $_POST['trie'] == "difficulte" ? "selected" : "";
                                            } ?>>difficulte</option>
                <option value="prix" <?php if (isset($_POST['trie'])) {
                                            echo $_POST['trie'] == "prix" ? "selected" : "";
                                        } ?>>prix</option>
            </select>
            <input class="btn btn-outline-blue-light" type="submit" name="envoi" value="Trier" />
        </form>



        <? if (isset($_POST['trie']) && $_POST['trie'] != "") {
            switch ($_POST['trie']) {
                case 'intitulé':
                    $keyorder = "title";
                    break;
                case 'difficulte':
                    $keyorder = "difficulty";
                    break;
                case 'prix':
                    $keyorder = "price";
                    break;

                default:
                    $keyorder = "id";
                    break;
            }
            $recettes = sortBy($keyorder, SORT_ASC);
        } else {
            $recettes = sortBy('id');
        } ?>
        <? foreach ($recettes as $recette) : ?>

            <div class="card m-2 p-1 shadow " style="width: 18rem;">
                <img src="<?= $recette['image']; ?>" class="card-img-top" alt="<?= $recette['title']; ?>">
                <div class="card-body flex-column d-flex align-items-end">
                    <div>
                        <h5 class="card-title"><?= $recette['title']; ?></h5>
                        <p class="card-text"><?= $recette['description']; ?></p>
                    </div>

                    <div class="mt-auto w-100  p-2  bg-blue-light ">
                        <p class="card-text"> difficulte</p>
                        <div class="progress">

                            <div class="progress-bar progress-bar-striped progress-bar-animated <?php if ($recette['difficulty'] < 4) {
                                                                                                    echo 'bg-success';
                                                                                                } elseif ($recette['difficulty'] < 8) {
                                                                                                    echo 'bg-warning';
                                                                                                } else {
                                                                                                    echo 'bg-danger';
                                                                                                } ?>" role="progressbar" aria-label="Example with label" style="width: <?= $recette['difficulty'] * 10; ?>%;" aria-valuenow="<?= $recette['difficulty']; ?>" aria-valuemin="0" aria-valuemax="10"><?= $recette['difficulty']; ?> /10</div>
                        </div>
                    </div>
                    <a href="./recette.php?id=<?= $recette['id']; ?>" class="btn btn-primary">Voir la recette</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Une recette de <?= $recette['auteur']['nom'] ?> <?= $recette['auteur']['prenom'] ?></small>

                    <p class="card-text text-warning d-flex justify-content-between">
                        <span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z" fill="yellow" />
                            </svg>

                            <?= $recette['likes']; ?></span>
                        <span class="card-text text-dark "> <?= $recette['price']; ?></span>
                    </p>
                </div>

            </div>

        <? endforeach ?>
    </div>
</main>


<? include './inc/footer.inc.php' ?>