<?php
namespace App\Controllers;

class Controller
{
    public function __construct()
    {
        echo "Controller->";
    }

    // public function view( string $view, array $data = [])
    // {
    //     extract($data);
    //     require __DIR__ . "/../../views/{$view}.php";
    // }
}
?>