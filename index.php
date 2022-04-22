<?php
    //analyse de l'URL avec parse_url() et retourne ses composants
    $parsed_url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($parsed_url['path']) ? $parsed_url['path'] : '/';
    /*------------------------------------------- 
                    ROUTER
    -------------------------------------------*/
    //test de la valeur $path dans l'URL et import de la ressource
    switch($path){
        //route /routing/route -> ./route.php
        case $path === "/routing/route":
            include './route.php';
        //route /routing/test -> ./test.php
        case $path === "/routing/test" : 
            include './test.php';
        //route /routing/toto2 -> ./toto2.php
        case $path === "/routing/toto2":
            include './toto2.php';
        //route /routing/addArticle -> ./controler/controler_article.php
        case $path === "/routing/addArticle":
            include './controler/controler_article.php';
    }
?>