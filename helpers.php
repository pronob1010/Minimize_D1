<?php 
function view( string $view, array $data = [])
{
    extract($data);

    echo "/views/{$view}.php";
    require __DIR__ . "/views/{$view}.php";
}

?>