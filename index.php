<?php
/************* Point d'entrée ******************* 
  
Je suis le point d'entrée
tout le monde passe par moi pour voir le site.

Je m'occupe de récupérer les informations
$_GET, $_POST

Avec ces informations, je choisit quelle vue/template doit être afficher

C'est moi qui dit qu'elle est la page par défaut
puisque c'est moi qui choisit la vue à afficher

Pas d'info => page par défaut
(ça rime donc c'est vrai :D)

*******************************************/

/**********************************
//?    Require des fichiers de classe / functions / BDD / etc ...
**********************************/

// j'ai besoin du fichier pour la function show()
// require __DIR__.'/functions.php';
require __DIR__.'/controllers/MainController.php';


/**********************************
//?    Je m'occupe de $_GET et je définis la vue à afficher
//?    Par défaut la vue sera 'home'
**********************************/

// exemple de lien : index.php?page=store

// on vérifie que l'utilisateur nous donne bien l'information
// de la page qu'il veux, sinon on lui donne la page par défaut
if (isset($_GET['page'])) {
    // on récupère la page demandé par l'utilisateur
    $currentPage = $_GET['page'];
} else {
    // notre page par défaut
    $currentPage = "home";
}

//? ici nous avons la même condition mais sur une seule ligne :
//?  expression ternaire (ternaire : 3)
/*
 est ce que isset($_GET['page'])  est VRAI ?
 après le ? le résultat si VRAI
 après le : le résultat si FAUX
*/
// $currentPage = isset($_GET['page']) ? $_GET['page'] : 'home'


/**********************************
//?    Je dois fournir des informations à mes vues
//?    Ici je donne les informations suivant la vue que l'on a demandé
**********************************/
// Je créer une instance de MainController
// C'est lui qui s'occupe de la méthode show()
$controller = new MainController();

if ($currentPage == 'store')
{
    $weekOpeningHours = [
        'Sunday' => 'Closed', 
        'Monday' => '7:00 AM to 8:00 PM',
        'Tuesday' => '12:12 AM to 8:00 PM',
        'Wednesday' => '7:00 AM to 8:00 PM',
        'Thursday' => '7:00 AM to 8:00 PM',
        'Friday' => '7:00 AM to 8:00 PM',
        'Saturday' => '9:00 AM to 5:00 PM'
    ];
    // j'utilise ma fonction show pour rendre générique l'inclusion de template
    // comprendre générique : réutilisable
    $controller->show($currentPage, $weekOpeningHours);
}
else if ($currentPage == 'home') {
    // j'utilise ma fonction show pour rendre générique l'inclusion de template
    // comprendre générique : réutilisable
    $controller->show($currentPage, 'je suis un paramètre pour la page HOME');
}
else if ($currentPage == 'products') {
    // j'utilise ma fonction show pour rendre générique l'inclusion de template
    // comprendre générique : réutilisable
    $controller->show($currentPage, 'je suis un paramètre pour la page PRODUCTS');
}

