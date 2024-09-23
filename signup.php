<?php
session_start();
include 'core/sl_conf.php';
include $doc.'core/sl_head.php';

include $doc.'modules/auth/functions/regions_select.php';
include $doc.'modules/auth/functions/game_systems_select.php';
include $doc.'modules/auth/functions/register.php';

include $doc.'modules/auth/templates/register.php';

include $doc.'core/sl_foot.php';
?>
