<?php
function createLeague()
{
  global $pdo;
  global $user;

  $finalhash = "";
  while($finalhash=="")
  {
    $hash = getToken(16);
    $sql = "select * from sl_leagues where league_hash = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($hash, 0));
    $r=$q->fetchAll();
    if(empty($r))
    {
      $finalhash = $hash;
    }
  }

  $sql = "insert into sl_leagues (league_hash, league_name, league_status) values (?,?,?)";
  $q = $pdo->prepare($sql);
  $q->execute(array($hash, "League Name Goes Here", 1));
  $event_id = $pdo->lastInsertId();

  $sql = "insert into sl_league_owner (lo_league, lo_user, lo_status) values (?,?,?)";
  $q = $pdo->prepare($sql);
  $q->execute(array($event_id, $user['auth_id'], 1));

  return $finalhash;
}
?>
