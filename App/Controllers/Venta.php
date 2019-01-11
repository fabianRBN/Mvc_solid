<?php

namespace App\Controllers;

use \Core\View;

/**
 * User admin controller
 *
 * PHP version 5.4
 */
class Venta extends \Core\Controller
{

    /**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
        // Make sure an admin user is logged in for example
        // return false;
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::render('Admin/ventas.php', [
            'name'    => 'Dave',
            'colours' => ['red', 'green', 'blue']
        ]);
    }
}
