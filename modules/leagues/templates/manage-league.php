<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>League Registration</title>
</head>

<body>
    <h2>Register a New League</h2>
    <form action="http://localhost/SL2/modules/leagues/functions/create_league.php" method="POST">
        <label for="league_name">League Name:</label>
        <input type="text" id="league_name" name="league_name" required><br><br>

        <label for="league_owner_id">League Owner ID:</label>
        <input type="number" id="league_owner_id" name="league_owner_id" required><br><br>

        <label for="league_status">League Status:</label>
        <input type="number" id="league_status" name="league_status" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>