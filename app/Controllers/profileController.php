<?php 

namespace App\Controllers;


class ProfileController extends Controller
{
    public function index()
    {
        echo "View";
        
        // $message = "Hello World from profileController";
        // require __DIR__ . "/../../views/profile/index.php";
        // echo "Hello World profileController";

        return view("profile/index", [
            'message' => 'Hello World from profileController',
            "test" => [
                1,2,3,4,5
            ],
        ]);
    }

    public function edit()
    {
        echo "Hello World profileController edit";
    }
}

?>