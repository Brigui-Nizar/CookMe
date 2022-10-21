<body>

    <div class="container">
        <header class="mb-2">
            <div class="logo">
                <img src="./assets/img/logo.png" alt="Cook Me" />
                <p class="brand">CookMe</p>
            </div>
            <nav class="navbar navbar-expand-lg  shadow-lg ">

                <div class="container-fluid">
                    <a class="navbar-brand" href="./index.php">Accueil</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link <? if (namePage() == "popularity") {
                                                        echo 'active';
                                                    } ?>
                            " href="./popularity.php">Les Plus populaire</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <? if (namePage() == "contact") {
                                                        echo 'active';
                                                    } ?>
                            " href="./contact.php">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <? if (namePage() == "nouvelleRecette") {
                                                        echo 'active';
                                                    } ?>
                            " href="./nouvelleRecette.php">Nouvelle Recette</a>
                            </li>
                            <li class="nav-item">
                                <? if (!isset($_COOKIE['log']) || $_COOKIE['log']  == false) : ?>
                                    <a class="nav-link <? if (namePage() == "connexion") {
                                                            echo 'active';
                                                        } ?>
                            " href="./connexion.php">Connexion</a>
                                <? endif ?>
                                <? if (isset($_COOKIE['log']) && $_COOKIE['log'] == true) : ?>
                                    <div class="col-12">
                                        <form action="./logout.php" method="post">
                                            <button class="btn btn-primary" type="submit">deconnexion</button>
                                        </form>
                                    </div>
                                <? endif ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <? if (isset($_COOKIE['log']) && $_COOKIE['log'] == true) : ?>
                <span>Bonjour <?= $_COOKIE['nom'] ?> <?= $_COOKIE['prenom'] ?></span>
            <? endif ?>
        </header>

        <!--    <? //foreach ($GLOBALS['_COOKIE'] as $key=>$value):
                ?>
            
<h6> <span style="color:red;"><? //=var_dump($key)
                                ?></span> <span style="color:green;"> <? //=var_dump($value)
                                                                        ?></span></h6>
        <? //endforeach
        ?> -->
        <? //var_dump($_COOKIE); 
        ?>