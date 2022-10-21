<? include './functions.php';
include './inc/head.inc.php';
include './inc/navbar.inc.php'; ?>

<main>

    <div class="row g-2  justify-content-center container-fluid">


        <? $recette = fetchOneRecipeById(idValid());
        if (idValid() == $recette['id']) : ?>

            <div class="container-fluid bg-blue-extra-light mt-1">
                <div class=" p-5 ">
                    <img src="<?= $recette['image']; ?>" class="card-img-top" alt="<?= $recette['title']; ?>">
                    <div class="">
                        <h1 class="display-3"><?= $recette['title']; ?></h1>
                        <p class="mb-6"><?= $recette['description']; ?></p>

                    </div>
                </div>
            </div>
        <? endif ?>

    </div>

</main>

<? include './inc/footer.inc.php' ?>