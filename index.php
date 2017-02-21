<?php
/**
 * Created by PhpStorm.
 * User: Ivan Zdravkov
 * Mail: i_zdravkov@abv.bg
 * Date: 21.2.2017 г.
 * Time: 14:47
 */
require_once __DIR__.'\incl.php';

$input = $request->get('name', 'World');

$response->setContent(sprintf('Hello %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8')));

$response->send();