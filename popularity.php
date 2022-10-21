<? include './functions.php';
include './inc/head.inc.php';

//var_dump( $_SERVER);
//echo  $_SERVER['PHP_SELF'];
?>

<? include './inc/navbar.inc.php'; ?>

<main>

    <div class="row g-2  justify-content-center">


        <? foreach (sortBy('likes') as $recette) : ?>

            <div class="card m-2" style="width: 18rem;">
                <img src="<?= $recette['image']; ?>" class="card-img-top" alt="<?= $recette['title']; ?>">
                <div class="card-body flex-column d-flex align-items-end">
                    <div>
                        <h5 class="card-title"><?= $recette['title']; ?></h5>
                        <p class="card-text"><?= $recette['description']; ?></p>
                    </div>
                    <a href="./recette.php?id=<?= $recette['id']; ?>" class="btn btn-primary">Voir la recette</a>
                </div>
            </div>
        <? endforeach ?>

    </div>
</main>

<? include './inc/footer.inc.php' ?>