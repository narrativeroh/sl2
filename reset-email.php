<?php
session_start();
include 'core/sl_conf.php';
include $doc.'modules/auth/functions/reset-password.php';

include $doc.'core/sl_head.php';
include $doc.'modules/auth/functions/reset_email.php';
include $doc.'modules/auth/templates/reset-email.php';

include $doc.'core/sl_foot.php';
?>
