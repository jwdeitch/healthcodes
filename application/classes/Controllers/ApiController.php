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
use Services\nycClient;

class ApiController extends Controller
{
    /**
     * Method available by /api
     *
     * @return mixed
     */
    public function query( InputManager $input )
    {
        $query = new nycClient();
        $result = $query->send($input->data( 'q' ));
        return $result;
    }

}
