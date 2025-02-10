<?php
function getLeague($leaguehash)
{
  global $pdo;
  global $user;
  $sql = "select * from sl_leagues inner join sl_league_owner on sl_leagues.league_id = sl_league_owner.lo_league where league_hash = ? and lo_user = ? and lo_status = ? and league_status > 0";
  $q = $pdo->prepare($sql);
  $q->execute(array($leaguehash, $user['auth_id'], 1));
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
