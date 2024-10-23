<?php
session_start();
include '../sl_conf.php';
include $doc.'modules/auth/functions/reset-password.php';

include $doc.'core/sl_head.php';
if($_GET['code']=="")
{
  include $doc.'modules/auth/templates/request-password.php';
}
else {
  include $doc.'modules/auth/templates/reset-password.php';
}

include $doc.'core/sl_foot.php';
?>
