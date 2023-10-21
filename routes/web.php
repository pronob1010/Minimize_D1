<?php

use App\Controllers\ProfileController;

return [
    // number 1 approach
    // "/profile" => ["ProfileController", "index"],
    // "/profile/edit" => ["ProfileController","edit"],

    //number 2 approach
    // "/profile" => ["App\Controllers\ProfileController", "index"],
    // "/profile/edit" => ["App\Controllers\ProfileController", "edit"],

    //number 3 approach
    "/profile" => [ProfileController::class, "index"],
    "/profile/edit" => [ProfileController::class, "edit"],
]

?>