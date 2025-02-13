<?php
function createLeague()
{
    global $pdo;
    global $user;

    // Ensure PDO is set up
    if (!$pdo) {
        die("Database connection is missing.");
    }
  
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      try {
            // Retrieve form values and sanitize
            $league_name = htmlspecialchars($_POST['league_name']);
            $league_owner_id = intval($_POST['league_owner_id']);
            $league_status = intval($_POST['league_status']);


            // Generate a unique league hash
            $finalhash = "";
            while ($finalhash == "") {
                $hash = getToken(16); // Ensure getToken() exists and works correctly
                
                $sql = "SELECT * FROM sl_leagues WHERE league_hash = ? AND league_status <> ?";
                $q = $pdo->prepare($sql);
                $q->execute([$hash, 0]);

                $r = $q->fetchAll();
                if (empty($r)) {
                    $finalhash = $hash;
                }
            }

            // Insert league data
            $sql = "INSERT INTO sl_leagues (league_hash, league_name, league_owner_id, league_status) 
                    VALUES (:league_hash, :league_name, :league_owner_id, :league_status)";
            $q = $pdo->prepare($sql);
            $q->execute([
                ':league_hash' => $finalhash,
                ':league_name' => $league_name,
                ':league_owner_id' => $league_owner_id,
                ':league_status' => $league_status
            ]);

            // Get last inserted league ID
            $league_id = $pdo->lastInsertId();

            // Debugging: Log the inserted league ID
            error_log("League Inserted: ID - $league_id, Hash - $finalhash");

            // Insert league ownership details
            $sql = "INSERT INTO sl_league_owner (lo_league, lo_user, lo_status) VALUES (?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute([$league_id, $user['auth_id'], 1]);

            // Debugging: Log league ownership insertion
            error_log("League Owner Inserted: League ID - $league_id, User ID - {$user['auth_id']}");

            return $finalhash;

        } catch (PDOException $e) {
            error_log("Database Error: " . $e->getMessage());
            die("Database error: " . $e->getMessage()); // Show error
        }
    }
    return false;

  }

?>