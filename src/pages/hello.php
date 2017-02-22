<?php
/**
 * Created by divanski.
 * User: Ivan Zdravkov
 * Mail: i_zdravkov@abv.bg
 * Date: 21.2.2017 г.
 * Time: 16:35
 */
?>
    Hello <?php echo htmlspecialchars($request->get('name', 'World'), ENT_QUOTES, 'UTF-8') ?>