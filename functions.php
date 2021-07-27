<?php 

/**
 * Fonction qui require les templates HEADER / FOOTER
 * Ainsi que la vue donnée en paramètre
 *
 * @param string $viewName
 */
function show($viewName)
{
    require_once __DIR__.'/views/header.tpl.php';
    require_once __DIR__."/views/{$viewName}.tpl.php";
    require_once __DIR__.'/views/footer.tpl.php';

    /* A la manière de la Saison 4 */
    //require __DIR__.'/views/header.tpl.php';
    // require __DIR__."/views/{$currentPage}.tpl.php";
    // Autre manière de concatener notre variable
    // require __DIR__.'/views/'.$currentPage.'.tpl.php';
    //require __DIR__.'/views/footer.tpl.php';
}