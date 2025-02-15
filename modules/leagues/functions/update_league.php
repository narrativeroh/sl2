function to take the details entered into the setup league form and submit them to the database.
input = form data as objects
output = success/fail message
<?php
function updateLeague()

{
    global $pdo;
    global $user;


    


// Update league data
$sql = "INSERT INTO sl_leagues (league_name, league_location, league_type, league_description, league_start, event_criteria1, event_criteria2, event_criteria3, event_criteria4, event_criteria5) VALUES (?,?,?,?,?,?,?,?,?,?)";
$q = $pdo->prepare($sql);
$q->execute(array('league_name', 'league_location', 'league_type', 'league_description', 'league_start', 'event_criteria1', 'event_criteria2', 'event_criteria3', 'event_criteria4', 'event_criteria5'));

    
}
?>