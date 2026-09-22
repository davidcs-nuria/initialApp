<?php
    function Route(string $inUri):array {
        $uri=trim(parse_url($inUri)["path"]);
        
        if($uri=="/") {
            $controller="home";
        }else{
            $urlExplode = explode("/", $uri);

            $url_new=array_values(array_filter($urlExplode,function ($v) {
                return $v != "";
            }));

            $controller=$url_new[0]??'';
            $action=$url_new[1]??'';
            $id=$url_new[2]??'';
        }
        return [$controller, $action, $id];
        // var_dump($controller, $action, $id);
        // if (in_array($controller, $routes)) {
        //     require __DIR__."/../app/controllers/".$controller.".php";
        //     die;
        // }

        // VERSION CON "SWIITCH"
        /*
        switch ($urlGet) {
            case "contact":
                require __DIR__."/../app/controllers/contact.php";
                die;
            case "about":
                require __DIR__."/../app/controllers/about.php";
                die;
            case "shop":
                require __DIR__."/../app/controllers/shop.php";
                die;
            default:
                require __DIR__."/../app/controllers/home.php";
                die;
        };
        */

        // VERSION CON "IF"
        /* if(isset(($url))) {
            if ($url==="contact") {
                require __DIR__."/../app/controllers/contact.php";
            }
            if ($url==="about") {
                require __DIR__."/../app/controllers/about.php";
            }
            if ($url==="shop") {
                require __DIR__."/../app/controllers/shop.php";
            }
        } else{
            require __DIR__."/../app/controllers/home.php";
        } */
    }
?>