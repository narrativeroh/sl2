<?php
function createLeague()
{
    global $pdo;
    global $user;

    // Generate a unique league hash
    $finalhash = "";
    while ($finalhash == "")
    {
      $hash = getToken(16); // Ensure getToken() exists and works correctly

      $sql = "SELECT * FROM sl_leagues WHERE league_hash = ? AND league_status <> ?";
      $q = $pdo->prepare($sql);
      $q->execute([$hash, 0]);

      $r = $q->fetchAll();
      if (empty($r))
      {
          $finalhash = $hash;
      }
    }

    // Insert league data
    $sql = "INSERT INTO sl_leagues (league_hash, league_name, league_owner_id, league_status) VALUES (?,?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($finalhash, 'Name this league', $user['auth_id'], 1));

    return $finalhash;
  }
?>