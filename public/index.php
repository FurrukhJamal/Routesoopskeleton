<?php
    $database = require("../core/bootstrap.php");

    $router = new Router;

    require("../routes.php");

    $uri = trim($_SERVER["REQUEST_URI"], "/");
    //print($_SERVER["REQUEST_URI"]);

    /*TEST TO CATCH GET VARIABLES*/
    $questionmarkpos = strpos($uri, "?");
    if($questionmarkpos !== FALSE)
    {
        //print($uri);
        //print($questionmarkpos);
        $uri = substr($uri, 0, $questionmarkpos);
    }

    require $router->redirect($uri);


?>
