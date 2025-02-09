<?php
session_start();
include '../sl_conf.php';
include $doc.'modules/auth/functions/login.php';
$mysession = session_id();
$user = authcheck($mysession);
$menu = "Organiser";
$section = "events";
if(!is_array($user))
{
  header('Location: '.$pub.'login/');
}
include $doc.'core/sl_head.php';
include $doc."core/sl_menu.php";

include $doc."modules/events/functions/events.php";

if(!empty($_GET['e']))
{
  $event = getEvent($_GET['e']);
  if(empty($event))
  {
    ?><br/><br/>
      <div class="text-center">
        <h1>We seem to have lost this event</h1>
        <p class="lead">I promise you the event you were looking for was here just a moment ago. I bet steve borrowed it and hasn't put it back!</p>
        <p class="lead">Head back to <a href="<?php echo $pub;?>events/" class="text-link">all events</a> to find your events.</p>
      </div>
    <?php
  }
  else {
    if($r[0]['event_status']==1)
    {
      include $doc."modules/events/templates/manage-event-1.php";
    }
  }
}
else {
  include $doc."modules/events/functions/game_systems_filter.php";
  include $doc."modules/events/templates/view-events.php";
}
?>



<?php
include $doc."core/sl_container_close.php";
include $doc.'core/sl_foot.php';
?>
