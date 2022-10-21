<?
//session_start();
include './bdd.php';
$utilisateurs = [
    [
        'id' => 1,
        'email' => 'user1@mail.com',
        'password' => 'user1',
        'nom' => 'Dupont',
        'prenom' => 'Jean',
    ],
    [
        'id' => 2,
        'email' => 'john@mail.com',
        'password' => 'john.doe',
        'nom' => 'Doe',
        'prenom' => 'John',
    ],
    [
        'id' => 3,
        'email' => 'jane@mail.com',
        'password' => 'jane.doe',
        'nom' => 'Doe',
        'prenom' => 'Jane',
    ],
];

$recettes = [
    [
        'id' => 1,
        'intitulé' => 'Poulet Basquaise',
        'description' => 'Une délicieuse recette de poulet au poivrons :)',
        'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fauvraidelice.fr%2Fwp-content%2Fuploads%2F2020%2F06%2FIMG-AuVraiDelice-6.jpg&f=1&nofb=1&ipt=5192941f5ed4215a84f1436d1c078cb15fe138fbd50d865f5681fdd851283f76&ipo=images',
        'likes' => 8,
        'difficulte' => 4,
        'prix' => '€',
        'active' => true,
        'auteur' => [
            'id' => 1,
            'nom' => 'Doe',
            'prenom' => 'Jane',
        ]
    ],
    [
        'id' => 2,
        'intitulé' => 'Poulet Curry',
        'description' => 'Une délicieuse recette de poulet au curry :)',
        'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fsunandgreen.fr%2Fwp-content%2Fuploads%2F2019%2F10%2Fpoulet_au_curry_et_oignons_recette_epices-768x768.jpg&f=1&nofb=1&ipt=50bbc90e5255fbfaa91d69843e82687a833227cb2b9e2fe9f976f0eae1df3e5d&ipo=images',
        'likes' => 18,
        'difficulte' => 2,
        'prix' => '€',
        'active' => true,
        'auteur' => [
            'id' => 2,
            'nom' => 'Doe',
            'prenom' => 'John',
        ]
    ],
    [
        'id' => 3,
        'intitulé' => 'Boeuf bourguignon',
        'description' => 'Une délicieuse recette de ragout de boeuf au petit légumes :)',
        // 'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcooking-chef.sa.metacdn.com%2Fsites%2Fdefault%2Ffiles%2Frecettes%2Fboeuf-bourguignon-recette_4x3.jpg&f=1&nofb=1&ipt=5d356762cdc71564a9ffd16a952477bd93e4da8169e592dde0d5b0b7d07a2e3f&ipo=images',
        'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.Dy-vJKL-Tvuukd1LQTVYpQHaHI%26pid%3DApi&f=1&ipt=3f5034e774af25e68a885a8c6676911387100d64b500a075f94dd67a47936082&ipo=images',

        'likes' => 23,
        'difficulte' => 5,
        'prix' => '€€',
        'active' => true,
        'auteur' => [
            'id' => 1,
            'nom' => 'Doe',
            'prenom' => 'Jane',
        ]
    ],
    [
        'id' => 4,
        'intitulé' => 'Pasta Carbonara',
        'description' => 'Une délicieuse recette de pates aux oeufs et petit lardons généreuse',
        'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.ilgiornalebg.it%2Fwp-content%2Fuploads%2F2020%2F12%2Fcarbonara.jpg&f=1&nofb=1&ipt=5b0f36da4149a0af7439d24bf765bec3533c3d8c4505eb4cc6bec33ec82dd6ea&ipo=images',
        'likes' => 43,
        'difficulte' => 2,
        'prix' => '€',
        'active' => false,
        'auteur' => [
            'id' => 2,
            'nom' => 'Doe',
            'prenom' => 'John',
        ]
    ],
    [
        'id' => 5,
        'intitulé' => 'Pizza Calzone',
        'description' => 'Une délicieuse pizza dans un chauson de pâte à dévorer',
        'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.periodistadigital.com%2Fwp-content%2Fuploads%2F2020%2F05%2Fcalzone-tradicional-3.jpg&f=1&nofb=1&ipt=a7bd4dfd5f7bb55dd207d05d506ce0e2f7b1d6ca29cfee4b369ba6ed5e29a33a&ipo=images',
        'likes' => 12,
        'difficulte' => 7,
        'prix' => '€',
        'active' => true,
        'auteur' => [
            'id' => 1,
            'nom' => 'Doe',
            'prenom' => 'Jane',
        ]
    ],
    [
        'id' => 6,
        'intitulé' => 'Omelette au champignons',
        'description' => 'Des oeufs et de bon champignons frais, une recette pas chers et réconfortante',
        'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.dexsa.de%2Fwp-content%2Fuploads%2F2019%2F08%2FAdobeStock_246243488-1.jpeg&f=1&nofb=1&ipt=b197730a8e8d8e04cba8a638a10afffedc80b63eb66e071455bc597b4f5ab739&ipo=images',
        'likes' => 17,
        'difficulte' => 2,
        'prix' => '€',
        'active' => false,
        'auteur' => [
            'id' => 2,
            'nom' => 'Doe',
            'prenom' => 'John',
        ]
    ],
    [
        'id' => 7,
        'intitulé' => 'Bar au beurre blanc',
        'description' => 'Un délicieux poisson au beurre blanc, une recette pour les grand jours !',
        'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.ensauce.com%2Fwp-content%2Fuploads%2F2015%2F10%2Fbar-grill%25C3%25A9-au-beurre-blanc.jpg&f=1&nofb=1&ipt=e397418507aaf41ada75ddc94197616a1b22e3ed7eae04a16fb63685779222bf&ipo=images',
        'likes' => 8,
        'difficulte' => 6,
        'prix' => '€€€',
        'active' => true,
        'auteur' => [
            'id' => 1,
            'nom' => 'Doe',
            'prenom' => 'Jane',
        ]
    ],
    [
        'id' => 8,
        'intitulé' => 'Forêt Noire',
        'description' => 'Un délicieux gateaux pour les amoureux de chocolat',
        'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ffac.img.pmdstatic.net%2Ffit%2Fhttp.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Ffac.2F2020.2F06.2F08.2F9ecf8e58-65e9-4e50-af3d-bc723292d06b.2Ejpeg%2F850x478%2Fquality%2F90%2Fcrop-from%2Fcenter%2Fforet-noire.jpeg&f=1&nofb=1&ipt=950a1b079d912914ae9f4f648a7e2132973e26eeede7ba058f3a4cc910a260e0&ipo=images',
        'likes' => 19,
        'difficulte' => 7,
        'prix' => '€€',
        'active' => false,
        'auteur' => [
            'id' => 2,
            'nom' => 'Doe',
            'prenom' => 'John',
        ]
    ],
    [
        'id' => 9,
        'intitulé' => 'Boeuf au oignons',
        'description' => 'Un délicieux plat asiatique pour toute la famille',
        'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.Dy-vJKL-Tvuukd1LQTVYpQHaHI%26pid%3DApi&f=1&ipt=3f5034e774af25e68a885a8c6676911387100d64b500a075f94dd67a47936082&ipo=images',
        'likes' => 10,
        'difficulte' => 4,
        'prix' => '€€',
        'active' => true,
        'auteur' => [
            'id' => 1,
            'nom' => 'Doe',
            'prenom' => 'Jane',
        ]
    ],
    [
        'id' => 10,
        'intitulé' => 'Sushis',
        'description' => 'Un délicieux plat traditionnel asiatique pour satisfaire les palets les plus éxigent',
        'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.nippon.com%2Ffr%2Fncommon%2Fcontents%2Fjapan-data%2F174999%2F174999.jpg&f=1&nofb=1&ipt=99fa80c190086d3665e048cae6ddd8ff535a60f5c479057b94a8d1cc79e40c81&ipo=images',
        'likes' => 37,
        'difficulte' => 8,
        'prix' => '€€€',
        'active' => true,
        'auteur' => [
            'id' => 2,
            'nom' => 'Doe',
            'prenom' => 'John',
        ]
    ],
];

// fonction trier => renvoie un tableau trier en fonction de la condition : 
// 'id', 'title','likes','difficulte','prix'
function sortBy(string $trieKey, $ordre = SORT_DESC): array
{
    /*  global $recettes; */
    $recettes = fetchAllRecipes($trieKey);
    /*  $recettesLike = array_column($recettes, $trieKey);
    array_multisort($recettesLike, $ordre, $recettes);
    var_dump($recettes); */
    return $recettes;
}






function namePage()
{
    // recupere l'url
    $phpUrl = $_SERVER['PHP_SELF'];
    // url decouper dans array a chaque '/'
    $phpUrlArray = explode("/", $phpUrl);
    // compte le no d'element du tableau
    $phpUrlArrayCount = count($phpUrlArray) - 1;
    // dernier element  dans array  decoupé sur '.'
    $phpName = explode(".", $phpUrlArray[$phpUrlArrayCount]);
    //affiche le 1er element du tableau $phpName ['nom','php']
    return reset($phpName);
}


function metaKeyword()
{
    global $recettes;
    $list = '';
    foreach ($recettes as $recette) {
        $list .= $recette['title'] . ', ';
    }
    return $list;
}



function setTitle()
{
    $titre = namePage();
    $metaKeyword = metaKeyword();
    switch ($titre) {
        case "accueil":
            return ['title' => 'Accueil', 'meta' => ['description' => 'CooK-Me | de bonnes recettes de cuisine', 'keywords' => "$metaKeyword"]];
            break;
        case "nouvelleRecette":
            return ['title' => 'Nouvelle Recette', 'meta' => ['description' => 'CooK-Me | Partagez vos recette', 'keywords' => '']];
            break;
        case "popularity":
            return ['title' => 'Les Plus Populaires', 'meta' => ['description' => 'CooK-Me | Vos recettes preferé', 'keywords' => '']];
            break;
        case "contact":
            return ['title' => 'Contact', 'meta' => ['description' => 'CooK-Me | Pour nous contacter', 'keywords' => '']];
            break;
        case "connexion":
            return ['title' => 'Connexion', 'meta' => ['description' => 'CooK-Me | Connexion', 'keywords' => '']];
            break;

        default:
            return ['title' => 'nos recettes', 'meta' => ['description' => '', 'keywords' => '']];
    }
}
$data = setTitle();

//check id
function idValid()
{
    global $recettes;

    // convert $_GET['id'] en int
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    //  if (isset($_GET['id']) && in_array($id, array_column($recettes, 'id'))) {
    if (isset($_GET['id']) && fetchOneRecipeById($id)) {
        return $id;
    } else {
        header("Location: ./index.php");
        die();
    }
}


function loginValid()
{
    global $utilisateurs;

    $mail = $_POST['email'];
    $pass = $_POST['password'];

    if (!isset($_POST['email']) && !isset($_POST['password'])) {
        header('Location: ./connexion.erreur.php');

        die();
    }


    $utilisateursEmail = array_column($utilisateurs, 'email');


    if ($mail === false || !in_array($mail, $utilisateursEmail)) {

        header('Location: ./connexion.erreur.php');
        die();
    }

    $indexEmail = array_search($mail, $utilisateursEmail);

    $utilisateur = $utilisateurs[$indexEmail];

    if ($utilisateur['password'] === $pass) {
        return ['id' => $utilisateur['id'], 'nom' => $utilisateur['nom'], 'prenom' => $utilisateur['prenom'], 'email' => $utilisateur['email'], 'log' => true];
    } else {

        header('Location: ./connexion.erreur.php');
        die();
    }
}

function ValidReceip()
{

    $title = $_POST['title'];
    $description = $_POST['description'];
    $imageUrl = $_POST['imageUrl'];
    $difficulty = $_POST['difficulty'];
    $price = $_POST['price'];
    $author = $_POST['email'];

    if (
        !isset($_POST['title']) && !isset($_POST['description'])
        && !isset($_POST['difficulty']) && !isset($_POST['price'])
    ) {
        header('Location: ./nouvelleRecette.php');

        die();
    } else if (
        $_POST['title'] == "" || $_POST['description'] == ""
        ||  $_POST['price'] == ""
    ) {
        header('Location: ./nouvelleRecette.php');
    } else {
        $id = addRecipe();
        header("Location: ./recette.php?id=$id");
    }
}

//fonction debug
function d($data)
{
    echo " <h6> debut de la fonction d()<br><span style='color:green;'> ";
    var_dump($data);
    echo "  </span></h6>";
    if (is_array($data)) {
        $i = 0;
        foreach ($data as $key => $value) {
            if ($i == 0) {
                echo '<table>';
            }
            $i++;
            if (is_array($value)) {
                d($value);
            } else {
                echo "<tr><td style='border:solid 1px black;color:red;'>" . $key . " </td><td style='border:solid 1px black;color:blue;'> " . $value . "</td></tr>";
            }
            if ($i == count($data)) {
                echo '</table>';
            }
        }
    } elseif (is_object($data)) {
        var_dump($data);
    } else {

        echo " <h6> <h5 style='color:red;'>" . $data . "</h5> ";
    }
}
