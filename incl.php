<?php
/**
 * Created by divanski.
 * User: Ivan Zdravkov
 * Mail: i_zdravkov@abv.bg
 * Date: 21.2.2017 г.
 * Time: 16:28
 */

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();