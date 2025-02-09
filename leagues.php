<?php
session_start();
include '../sl_conf.php';
include $doc.'modules/auth/functions/login.php';
$mysession = session_id();
$user = authcheck($mysession);
$menu = "Organiser";
$section = "leagues";
if(!is_array($user))
{
  header('Location: '.$pub.'login/');
}
include $doc.'core/sl_head.php';
include $doc."core/sl_menu.php";

if(!empty($_GET['e']))
{
  //league management goes here
}
else {
  include $doc."modules/leagues/functions/league_game_systems_filter.php";
  include $doc."modules/leagues/functions/edit_league.php";
  include $doc."modules/leagues/templates/view-leagues.php";
}
?>



<?php
include $doc."core/sl_container_close.php";
include $doc.'core/sl_foot.php';
?>
