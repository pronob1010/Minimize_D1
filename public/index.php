<?php

require_once __DIR__ . "/../vendor/autoload.php";
$routes = require_once __DIR__ ."/../routes/web.php";

echo"Hello World";

echo "<pre>";
print_r($routes);
echo "</pre>";

echo "<pre>";
print_r($_SERVER['REQUEST_URI']);
echo "</pre>";


$request = $_SERVER["REQUEST_URI"];
$request = explode("?", $request)[0];

// print_r($request);
// echo '<br>';

// print_r($routes['/profile']);
// echo '<br>';

// echo $routers[$request];

// print_r($routes[$request]);

if(isset($routes[$request])) {
    // print_r($routes[$request]);

    $controller = $routes[$request][0]??null;
    $action = $routes[$request][1]??null;

    if($controller && $action) {
        
        echo "<pre> If I go to this {$request} route, This {$controller} controller will be called and this {$action} action will be executed. </pre>";

        $newController = new $controller();
        $newController->$action();
    }

}
else{
    echo "404";
}

?>