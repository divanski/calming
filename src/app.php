<?php
/**
 * Created by divanski.
 * User: Ivan Zdravkov
 * Mail: i_zdravkov@abv.bg
 * Date: 22.2.2017 г.
 * Time: 9:17
 */
use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', array(
    'year' => null,
    '_controller' => 'Calendar\Controller\LeapYearController::indexAction',
)));

return $routes;