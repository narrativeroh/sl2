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

include $doc."modules/leagues/functions/leagues.php";

if(!empty($_GET['e']))
{
  $league = getLeagues($_GET['e']);
  if(empty($league))
  {
    ?><br /><br />
<div class="text-center">
    <h1>We seem to have lost this league</h1>
    <p class="lead">I promise you the league you were looking for was here just a moment ago. It's likely shifted into a
        parallel universe and hasn't returned yet!</p>
    <p class="lead">Head back to <a href="<?php echo $pub;?>leagues/" class="text-link">all leagues</a> to find your
        leagues.</p>
</div>
<?php
  }
  else {
    if($r[0]['league_status']==1)
    {
      include $doc."modules/leagues/templates/manage-league.php";
    }
  }
}
else {
  include $doc."modules/leagues/functions/league_game_systems_filter.php";
  include $doc."modules/leagues/templates/view-leagues.php";
}
?>



<?php
include $doc."core/sl_container_close.php";
include $doc.'core/sl_foot.php';
?>