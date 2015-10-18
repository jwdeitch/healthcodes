<?php
/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 * @copyright ©2009-2015
 */
namespace Controllers;

use Spiral\Core\Controller;
use Spiral\Http\InputManager;
use Spiral\Http\Responses\RedirectResponse;
use Spiral\Http\Routing\Router;

class HomeController extends Controller
{
    /**
     * Method available by / or /home/
     *
     * @return mixed
     */
    public function index()
    {
        return $this->views->render('main');
    }

}
