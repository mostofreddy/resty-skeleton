<?php
/**
 * WelcomeController.php
 *
 * PHP version 5.5+
 *
 * @category  Welcome
 * @package   Welcome
 * @author    Federico Lozada Mosto <mosto.federico@gmail.com>
 * @copyright 2015 Mostofreddy.com.ar <mosto.federico@gmail.com>
 * @license   Mostofreddy (http://www.mostofreddy.com.ar)
 * @link      http://www.mostofredd.com.ar
 */
namespace Resty\Skeleton\Welcome;

// Resty
use Resty\Controller\ControllerBase;

/**
* WelcomeController.php
*
 * @category  Welcome
 * @package   Welcome
 * @author    Federico Lozada Mosto <mosto.federico@gmail.com>
 * @copyright 2015 Mostofreddy.com.ar <mosto.federico@gmail.com>
 * @license   Mostofreddy (http://www.mostofreddy.com.ar)
 * @link      http://www.mostofredd.com.ar
 */
class WelcomeController extends ControllerBase
{
    /**
     * Index
     *
     * @return array
     */
    public function index()
    {
        return [
            "Welcome to Resty!"
        ];
    }
}
