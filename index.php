<?php

require __DIR__.'/functions.php';

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

// ici nous avons la même chose mais sur une seule ligne
// est ce que isset($_GET['page'])  est VRAI ?
// après le ? le résultat si VRAI
// après le : le résultat si FAUX
// $currentPage = isset($_GET['page']) ? $_GET['page'] : 'home'

// j'utilise ma fonction show pour rendre générique l'inclusion de template
// comprendre générique : réutilisable
show($currentPage);



