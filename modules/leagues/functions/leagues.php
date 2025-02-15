<?php
function getLeague($leaguehash)
{
  global $pdo;
  global $user;
  $sql = "select * from sl_leagues where league_hash = ? and league_owner_id = ? and league_status > 0";
  $q = $pdo->prepare($sql);
  $q->execute(array($leaguehash, $user['auth_id']));
  $r=$q->fetchAll();
  if(empty($r))
  {
    return "";
  }
  else {
    return $r[0];
  }
}

function getLeagues()
{
  global $pdo;
  global $user;
  $sql = "select * from sl_leagues where league_owner_id = ? and league_status > 0";
  $q = $pdo->prepare($sql);
  $q->execute(array($user['auth_id']));
  $r=$q->fetchAll();
  if(empty($r))
  {
    return "";
  }
  else {
    return $r;
  }
}
?>