<?php
session_start();
include '../sl_conf.php';
include $doc.'modules/auth/functions/login.php';
$mysession = session_id();
$user = authcheck($mysession);
$menu = "Player";
if(!is_array($user))
{
  header('Location: '.$pub.'login/');
}
include $doc.'core/sl_head.php';
include $doc."core/sl_menu.php";
include $doc.'modules/auth/functions/regions_select.php';
include $doc.'modules/auth/functions/edit_user.php';
include $doc.'modules/auth/functions/reset-password.php';
include $doc.'modules/auth/functions/reset_email.php';
include $doc."modules/auth/templates/edit-user.php";
?>
<?php
include $doc."core/sl_container_close.php";
include $doc.'core/sl_foot.php';
?>
