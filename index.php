<?php

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = [
    "/" => "pages/home.php",
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
}

?>