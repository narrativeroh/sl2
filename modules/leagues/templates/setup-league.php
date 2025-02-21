<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customise League</title>
</head>

<body>
    <div id="league-info" style="float: left; position: absolute; margin-top: -86px;"></div>
    <div class="card">
        <div class="card-header">
            <h4><i class="bi bi-exclamation-circle-fill text-danger"></i> LEAGUE INFO</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <!-- league name -->
                    <form method="post">
                        <div class="form-floating mb-3">
                            <input type="text" maxlength="50" class="autosave form-control" data-sl-field="league_name"
                                id="sl_league_title" placeholder="League Title"
                                value="<?php echo $league['league_name'];?>">
                            <label for="floatingInput">League Title</label>
                        </div>
                        <!-- Game system (selector FROM sl_game_system) Note: by default, only games that match this type will be eligable for league submission-->
                        <!-- <div class="form-floating mb-3">
                            <input type="text" maxlength="50" class="autosave form-control" data-sl-field="league_name"
                                id="sl_league_title" placeholder="League Title"
                                value="<?php echo $league['league_name'];?>">
                            <label for="floatingInput">Game System Dropdown</label>
                        </div> -->
                        <!-- league location (country or online aka worldwide)-->
                        <div class="form-floating mb-3">
                            <input type="text" maxlength="50" class="autosave form-control"
                                data-sl-field="league_location" id="sl_league_location" placeholder="League Location"
                                value="<?php echo $league['league_location'];?>">
                            <label for="floatingInput">League Location</label>
                        </div>
                        <!-- League type (selector open competition -or- limited series)-->
                        <div class="form-floating mb-3">
                            <input type="number" maxlength="50" class="autosave form-control"
                                data-sl-field="league_type" id="sl_league_type" placeholder="1"
                                value="<?php echo $league['league_type'];?>">
                            <label for="floatingInput">League Type</label>
                        </div>
                        <!-- league description (text area) -->
                        <div class="form-floating mb-3">
                            <input type="text" maxlength="50" class="autosave form-control"
                                data-sl-field="league_description" id="sl_league_description"
                                placeholder="League Description" value="<?php echo $league['league_description'];?>">
                            <label for="floatingInput">League Description</label>
                        </div>
                        <!-- Start date (datepicker) -->
                        <!-- <div class="form-floating mb-3">
                            <input type="text" maxlength="50" class="autosave form-control" data-sl-field="league_start"
                                id="sl_league_start" placeholder="League Start Date"
                                value="<?php echo $league['league_start'];?>">
                            <label for="floatingInput">Start Date</label>
                        </div> -->
                        <!-- Season length (duration: selector 3, 6, 12, 18, 24 months -or- qty of events: INT)-->
                        <!-- <div class="form-floating mb-3">
                            <input type="text" maxlength="50" class="autosave form-control" data-sl-field="league_name"
                                id="sl_league_title" placeholder="League Title"
                                value="<?php echo $league['league_name'];?>">
                            <label for="floatingInput">Season Length</label>
                        </div> -->
                </div>
                <div class="col-md-6">
                    <!-- league image (image upload) -->
                    <!-- <div class="form-floating mb-3">
                        <input type="text" maxlength="50" class="autosave form-control" data-sl-field="league_name"
                            id="sl_league_title" placeholder="League Title"
                            value="<?php echo $league['league_name'];?>">
                        <label for="floatingInput">Image Upload</label>
                    </div> -->

                </div>
            </div>
        </div>
    </div><br />
    <!-- League Settings to appear if league type = open competition -->
    <div class="card">
        <div class="card-header">
            <h4><i class="bi bi-exclamation-circle-fill text-danger"></i> LEAGUE SETTINGS</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <h5>Setting the limits below will determine which events are able to be submitted to your league
                </h5>
                <div class="col-md-6">
                    <!-- Minimum event rounds (INT)-->
                    <div class="form-floating mb-3">
                        <input type="number" class="autosave form-control" data-sl-field="event_criteria1"
                            id="sl_league_event_criteria1" placeholder="Minimum number of rounds"
                            value="<?php echo $league['event_criteria1'];?>">
                        <label for="floatingInput">Minimum number of rounds</label>
                    </div>
                    <!-- Maximum event rounds (INT)-->
                    <div class="form-floating mb-3">
                        <input type="number" class="autosave form-control" data-sl-field="event_criteria2"
                            id="sl_league_event_criteria2" placeholder="Maximum number of rounds"
                            value="<?php echo $league['event_criteria2'];?>">
                        <label for="floatingInput">Maximum number of rounds</label>
                    </div>
                    <!-- Minimum event player qty (INT)-->
                    <div class="form-floating mb-3">
                        <input type="number" class="autosave form-control" data-sl-field="event_criteria3"
                            id="sl_league_event_criteria3" placeholder="Minimum number of players"
                            value="<?php echo $league['event_criteria3'];?>">
                        <label for="floatingInput">Minimum number of players</label>
                    </div>
                    <!-- Minimum event points (INT)-->
                    <div class="form-floating mb-3">
                        <input type="number" class="autosave form-control" data-sl-field="event_criteria4"
                            id="sl_league_event_criteria4" placeholder="Minimum army points limit"
                            value="<?php echo $league['event_criteria4'];?>">
                        <label for="floatingInput">Minimum army points limit</label>
                    </div>
                    <!-- Maximum event points (INT)-->
                    <div class="form-floating mb-3">
                        <input type="number" class="autosave form-control" data-sl-field="event_criteria5"
                            id="sl_league_event_criteria5" placeholder="Maximum army points limit"
                            value="<?php echo $league['event_criteria5'];?>">
                        <label for="floatingInput">Maximum army points limit</label>
                    </div>
                </div>
            </div>
        </div>
    </div><br />
    <div>
        <button type="submit" name="submit">Submit</button>
    </div>
    </form>

    <?php
    if (isset($_POST['submit'])) {updateLeague('league_name', 'league_location', 'league_type', 'league_description', 
        'event_criteria1', 'event_criteria2', 'event_criteria3', 'event_criteria4', 'event_criteria5');}
  
function updateLeague(){
global $pdo;

echo "<p>Button Clicked</p>";
        
        $sql =
        "INSERT INTO sl_leagues (league_name, league_location, league_type, league_description, event_criteria1, event_criteria2, event_criteria3, event_criteria4, event_criteria5) VALUES (?,?,?,?,?,?,?,?,?)";
        $q = $pdo -> prepare($sql);
        $q -> execute (array('league_name', 'league_location', 'league_type', 'league_description', 
        'event_criteria1', 'event_criteria2', 'event_criteria3', 'event_criteria4', 'event_criteria5'));
    
    }
?>
</body>


</html>