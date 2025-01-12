<?php
function createEvent()
{
  global $pdo;
  global $user;

  $finalhash = "";
  while($finalhash=="")
  {
    $hash = getToken(16);
    $sql = "select * from sl_events where event_hash = ? and event_status <> ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($hash, 0));
    $r=$q->fetchAll();
    if(empty($r))
    {
      $finalhash = $hash;
    }
  }

  $sql = "insert into sl_events (event_hash, event_name, event_status) values (?,?,?)";
  $q = $pdo->prepare($sql);
  $q->execute(array($hash, "Tournament Name Goes Here", 1));
  $event_id = $pdo->lastInsertId();

  $sql = "insert into sl_event_organiser (eo_event, eo_user, eo_status) values (?,?,?)";
  $q = $pdo->prepare($sql);
  $q->execute(array($event_id, $user['auth_id'], 1));

  return $finalhash;
}
?>
