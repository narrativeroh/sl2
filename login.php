<?php
session_start();
include '../sl_conf.php';
include $doc.'core/sl_head.php';

include $doc.'modules/auth/functions/login.php';
include $doc.'modules/auth/templates/login.php';

include $doc.'core/sl_foot.php';
?>
