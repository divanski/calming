<?php
/**
 * Created by divanski.
 * User: Ivan Zdravkov
 * Mail: i_zdravkov@abv.bg
 * Date: 21.2.2017 г.
 * Time: 16:35
 */
$input = $request->get('name', 'World');
$response->setContent(sprintf('Hello %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8')));