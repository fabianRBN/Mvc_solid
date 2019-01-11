<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Post;

/**
 * Posts controller
 *
 * PHP version 5.4
 */
class Usuario extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function loginAction()
    {
        

        View::render('login.php', []);
    }

 

}
