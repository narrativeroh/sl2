<?php
function getEvent($eventhash)
{
  global $pdo;
  global $user;
  $sql = "select * from sl_events inner join sl_event_organiser on sl_events.event_id = sl_event_organiser.eo_event where event_hash = ? and eo_user = ? and eo_status = ? and event_status > 0";
  $q = $pdo->prepare($sql);
  $q->execute(array($eventhash, $user['auth_id'], 1));
  $r=$q->fetchAll();
  if(empty($r))
  {
    return "";
  }
  else {
    return $r[0];
  }
}
?>
