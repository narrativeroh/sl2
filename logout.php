<?php
session_start();
include '../sl_conf.php';
include $doc.'core/sl_head.php';

include $doc.'modules/auth/functions/login.php';
include $doc.'modules/auth/templates/logout.php';

include $doc.'core/sl_foot.php';
?>
