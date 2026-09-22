<?php
    require_once __DIR__."/../core/router.php";
    
    $routes=["home","shop","about","contact","user","product"];

    $routeArray = Route($_SERVER["REQUEST_URI"]);

    if (in_array($routeArray[0], $routes)) {
        require_once __DIR__."/../app/controllers/".$routeArray[0].".php";
        die;
    }
?>