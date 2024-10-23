<?php
session_start();
include '../sl_conf.php';
include $doc.'modules/auth/functions/login.php';
$mysession = session_id();
$user = authcheck($mysession);
$menu = "Player";
if(!is_array($user))
{
  header('Location: '.$pub.'login/');
}
include $doc.'core/sl_head.php';
include $doc."core/sl_menu.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Configure Tournament</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
* {box-sizing: border-box}

body{margin-top:20px;}
.timeline-steps {
    display: flex;
    justify-content: center;
    flex-wrap: wrap
}

.timeline-steps .timeline-step {
    align-items: center;
    display: flex;
    flex-direction: column;
    position: relative;
    margin: 1rem
}

@media (min-width:768px) {
    .timeline-steps .timeline-step:not(:last-child):after {
        content: "";
        display: block;
        border-top: .25rem dotted #3b82f6;
        width: 3.46rem;
        position: absolute;
        left: 7.5rem;
        top: .3125rem
    }
    .timeline-steps .timeline-step:not(:first-child):before {
        content: "";
        display: block;
        border-top: .25rem dotted #3b82f6;
        width: 3.8125rem;
        position: absolute;
        right: 7.5rem;
        top: .3125rem
    }
}

.timeline-steps .timeline-content {
    width: 10rem;
    text-align: center
}

.timeline-steps .timeline-content .inner-circle {
    border-radius: 1.5rem;
    height: 1rem;
    width: 1rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background-color: #3b82f6
}

.timeline-steps .timeline-content .inner-circle:before {
    content: "";
    background-color: #3b82f6;
    display: inline-block;
    height: 3rem;
    width: 3rem;
    min-width: 3rem;
    border-radius: 6.25rem;
    opacity: .5
}


</style>

  </head>

<body>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<div>
  <hr>
</div>

<div class="sticky-top">
  <div class="card text-center mb-3">
    <div class="card-body">
    <img class="menu-avatar float-start" src="<?php echo $pub;?>uploads/8/cookie.jpg"/>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-outline-info me-md-2">Preview</button>
    <button class="btn btn-primary me-md-2" type="button">Save Draft</button>
  <button class="btn btn-grad" type="button">Publish</button>
</div>
  </div>
  </div>
</div>

<!-- stepper: there is a lot of additional code in here because I copied the snippet from a bootstrap site and I didn't bring any JS or data across with it -->

<div class="container">
    <div class="row text-center justify-content-center mb-5">
        <div class="col-xl-6 col-lg-8">
            <h2 class="font-weight-bold">Tournament Dashboard</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2003">
                        <div class="inner-circle"></div>
                        <p class="h6 text-muted mb-0 mb-lg-0">1. Setup Tournament</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                        <div class="inner-circle"></div>
                        <p class="h6 text-muted mb-0 mb-lg-0">2. Open for Registration</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2005">
                        <div class="inner-circle"></div>
                        <p class="h6 text-muted mb-0 mb-lg-0">3. Run Tournament</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2010">
                        <div class="inner-circle"></div>
                        <p class="h6 text-muted mb-0 mb-lg-0">4. End Tournament</p>
                    </div>
                </div>
                <div class="timeline-step mb-0">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2020">
                        <div class="inner-circle"></div>
                        <p class="h6 text-muted mb-0 mb-lg-0">5. Publish Results</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div>
  <div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-3">
      <img src="https://news.utexas.edu/wp-content/uploads/2022/07/Hero-600x400-c-default.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h5 class="card-title">Tournament Name [EDIT]</h5>
        <ul>
        <li class="card-text">Game system</li>
        <li class="card-text">Short description</li>
        <li class="card-text">Dates</li>
        <li class="card-text">Location</li>
        <li class="card-text">Public/Private</li>
        </ul>
        <button type="button" class="btn btn-outline-warning btn-sm">tag</button>
        <button type="button" class="btn btn-outline-warning btn-sm">tag</button>
        <button type="button" class="btn btn-outline-warning btn-sm">tag</button>
        <button type="button" class="btn btn-outline-warning btn-sm">tag</button>
      </div>
    </div>
  </div>
</div>
</div>

<div class="d-grid mb-3">
  <button class="btn btn-grad btn-lg">Go Premium</button>
</div>


<div>
  <hr>
</div>

<div>
  <h4>Tournament Settings</h4>

  <div class="row">
  <div class="col-2">
    <div id="list-example" class="list-group">
      <a class="list-group-item list-group-item-action" href="#list-item-1">Tournament Format</a>
      <a class="list-group-item list-group-item-action" href="#list-item-2">Tickets</a>
      <a class="list-group-item list-group-item-action" href="#list-item-3">Pairing Rules</a>
      <a class="list-group-item list-group-item-action" href="#list-item-4">Scoring</a>
      <a class="list-group-item list-group-item-action" href="#list-item-5">Results Calculation</a>
      <a class="list-group-item list-group-item-action" href="#list-item-6">Game System</a>
      <a class="list-group-item list-group-item-action" href="#list-item-7">Hobby & Sports</a>
      <a class="list-group-item list-group-item-action" href="#list-item-8">Awards & Badges</a>
    </div>
  </div>
  <div class="col-10">
    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
      <h5 id="list-item-1">Tournament Format</h5>
      <div class="row">
<div class="col">
  <div class="form-floating mb-3">
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
    <option selected>Select a tournament format</option>
    <option value="1">Standard Competition</option>
    <option value="2">Round Robin</option>
    <option value="3">Elimination</option>
  </select>
  <label for="floatingSelect">Tournament Format</label>
  </div>

</div>
<div class="col">
  <div class="form-floating mb-3">
  <input type="number" class="form-control" id="floatingInput" placeholder="">
  <label for="floatingInput">Number of rounds</label>
  </div>

</div>
<div class="col">
  <div class="form-floating mb-3">
    <input type="number" class="form-control" id="floatingPassword" placeholder="">
    <label for="floatingPassword">Round time limit</label>
  </div>
</div>
      </div>
      <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
        <label for="floatingTextarea2">Long Description</label>
      </div>
<div class="mb-3">
        <label for="formFile" class="form-label"><h5>Already have a Player Pack? Upload it here:</h5></label>
        <input class="form-control" type="file" id="formFile">
      </div>
<p>Event schedule</p>
<p>I'm picturing this as a table with time brackets and a description and the ability to add more lines to the table to build a schedule. It would be good if it recognised when the event goes over multiple days and provided a separate table for each day.</p>
<p></p>
<hr>
      <h5 id="list-item-2">Tickets</h5>
    <div class="row">
      <div class ="col">
    <p><u>This is where the name of a created ticket will sit [edit icon]</u></p>
  </div>
  <div class = "col">
  <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
         <button class="btn btn-grad" type="button" data-bs-toggle="modal" data-bs-target="#addTicketModal">
         Add Ticket</button>
        </div>
</div>
</div>
<hr>
      <h5 id="list-item-3">Pairing Rules</h5>
      <div class="row align-items-center">
        <div class="col">
        <div class="form-floating mb-3">
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
          <option selected>Select a pairing method</option>
          <option value="1">Random Swiss</option>
          <option value="2">Competitive Swiss</option>
          <option value="3">Win Path</option>
          <option value="4">Random Swiss with Competitive Swiss in the Final Round</option>
        </select>
        <label for="floatingSelect">Pairing Method</label>
        </div>
        </div>
        <div class="col">
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Blood rule enabled</label>
          </div>
        </div>
        <div class="col">
         <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault">Grudge matches enabled</label>
        </div>
        </div>
        <div class="col">
         <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault">Random tables enabled</label>
        </div>
        </div>
      </div>
      <hr>
      <h5 id="list-item-4">Scoring</h5>
      <p>Select which items and percentages will contribute to the total score. Move the presets to this section.</p>


    <div class="row">
      <div class="col">
        <div class="card text-center">
        <img src="https://d3-graph-gallery.com/img/block/block_pieChartAnim.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">All Rounder</h5>
            <p class="card-text">Equal parts gaming, sports & hobby</p>
          </div>
        </div>
      </div>
         <div class="col">
        <div class="card text-center">
        <img src="https://d3-graph-gallery.com/img/block/block_pieChartAnim.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">General's Gambit</h5>
            <p class="card-text">100% gaming</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-center">
        <img src="https://d3-graph-gallery.com/img/block/block_pieChartAnim.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Community Twist</h5>
            <p class="card-text">60% gaming, 20% sports, 20% hobby</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-center">
        <img src="https://d3-graph-gallery.com/img/block/block_pieChartAnim.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">TO Special</h5>
            <p class="card-text">Custom setup</p>
          </div>

        </div>

</div>


<p></p>
      <li>Generalship % (winning games)</li>
      <li>Sportsmanship % (Being nice) - entering a value here toggles it on in the hobby & sports section</li>
      <li>Hobby % (Paint, display & conversions) - entering a value here toggles it on in the hobby & sports section</li>
      <p>...</p>
      <p>Maybe some kind of slider??</p>
      <p>...</p>
      <h5>Scorecard setup</h5>
<p>Select the scoring method for games.</p>
<div>
<div class="form-floating mb-3">
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
          <option selected></option>
          <option value="1">Win/Draw/Loss</option>
          <option value="2">Majors & Minors</option>
          <option value="3">Victory Points 20-0 Differential</option>
          <option value="4">Total Victory Points</option>
        </select>
        <label for="floatingSelect">Scoring</label>
        </div>
        </div>
        <p>Insert input fields for entering points values if w/d/l or majors/minors are selected. Also add in a Cap Scores field so TOs can choose a maximum cap for scores per round.</p>
        <div>
        <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
  <label class="form-check-label" for="flexSwitchCheckDefault">Apply anti-submarine score modifier</label>
</div>
<br>
<hr>
</div>

      <!-- <h6>Penalties</h6>
      <p>Penalties (select from a pre-written list of causes of penalty and apply custom points to be deducted e.g. late list submission, incorrect list submission etc)</p>

      <div class="row align-items-center mb-3">
        <div class="col-auto">
        <label for="Penalty1" class="col-form-label">Incorrect list format</label>
        </div>
        <div class="col-auto">
        <input type="number" id="Penalty1" class="form-control" aria-describedby="passwordHelpInline">
        </div>
      </div>
      <div class="row align-items-center mb-3">
        <div class="col-auto">
        <label for="Penalty1" class="col-form-label">Late list submission</label>
        </div>
        <div class="col-auto">
        <input type="number" id="Penalty1" class="form-control" aria-describedby="passwordHelpInline">
        </div>
      </div> -->
      <div class="row">
           <div class="col-11">
      <h6>Custom Scoring Secondaries</h6>
      <p>Add custom scoring items that can be achieved each game.</p>
           </div>
      <div class="col">
      <div class="d-grid d-md-flex justify-content-md-end mb-3">
      <button class="btn btn-grad" type="button" data-bs-toggle="modal" data-bs-target="#addPenalty">
         +</button>
      </div>
      </div>




    </div>
<div>
      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Points</th>
      <th scope="col">Frequency</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Grand strategy success</td>
      <td>Grand strategy was achieved</td>
      <td>3 points</td>
      <td>Once per game</td>
      <td><div class="btn-toolbar gap-2 d-grid d-md-flex justify-content-md-end " role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group me-2" role="group" aria-label="First group">
          <button type="button" class="btn btn-outline-secondary"><i class="bi bi-pencil"></i></button>
          <button type="button" class="btn btn-outline-secondary"><i class="bi bi-trash"></i></button>
        </div>
        </div></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Grand strategy denial</td>
      <td>Denied your opponent's grand strategy</td>
      <td>3 points</td>
      <td>Once per game</td>
      <td><div class="btn-toolbar gap-2 d-grid d-md-flex justify-content-md-end " role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group me-2" role="group" aria-label="First group">
          <button type="button" class="btn btn-outline-secondary"><i class="bi bi-pencil"></i></button>
          <button type="button" class="btn btn-outline-secondary"><i class="bi bi-trash"></i></button>
        </div>
        </div></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Eliminate enemy general</td>
      <td>Killed your opponent's general</td>
      <td>0 points</td>
      <td>Once per game</td>
      <td><div class="btn-toolbar gap-2 d-grid d-md-flex justify-content-md-end " role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group me-2" role="group" aria-label="First group">
          <button type="button" class="btn btn-outline-secondary"><i class="bi bi-pencil"></i></button>
          <button type="button" class="btn btn-outline-secondary"><i class="bi bi-trash"></i></button>
        </div>
        </div></td>
    </tr>

  </tbody>
</table>
</div>

<br>
      <hr>
<div class="row">
           <div class="col">
      <h6>Penalties</h6>
      <p>Add any penalties that you would like to apply.</p>
           </div>
      <div class="col">
      <div class="d-grid d-md-flex justify-content-md-end mb-3">
      <button class="btn btn-grad" type="button" data-bs-toggle="modal" data-bs-target="#addPenalty">
         +</button>
      </div>
      </div>




    </div>
<div>
      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Points</th>
      <th scope="col">Frequency</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Late list submission</td>
      <td>Submit your list after the deadline</td>
      <td>-5 points</td>
      <td>Once per tournament</td>
      <td><div class="btn-toolbar gap-2 d-grid d-md-flex justify-content-md-end " role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group me-2" role="group" aria-label="First group">
          <button type="button" class="btn btn-outline-secondary"><i class="bi bi-pencil"></i></button>
          <button type="button" class="btn btn-outline-secondary"><i class="bi bi-trash"></i></button>
        </div>
        </div></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Incorrect list format</td>
      <td>Submitting a list in the wrong format</td>
      <td>-10 points</td>
      <td>Once per tournament</td>
      <td><div class="btn-toolbar gap-2 d-grid d-md-flex justify-content-md-end " role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group me-2" role="group" aria-label="First group">
          <button type="button" class="btn btn-outline-secondary"><i class="bi bi-pencil"></i></button>
          <button type="button" class="btn btn-outline-secondary"><i class="bi bi-trash"></i></button>
        </div>
        </div></td>
    </tr>

  </tbody>
</table>
</div>


      </div>
      </div>
      <br>
<hr>
      <div class="row">
           <div class="col-11">
      <h6>Tournament Bonus Points</h6>
      <p>Add bonus points for players to be awarded.</p>
           </div>
      <div class="col">
      <div class="d-grid d-md-flex justify-content-md-end mb-3">
      <button class="btn btn-grad" type="button" data-bs-toggle="modal" data-bs-target="#addPenalty">
         +</button>
      </div>
      </div>




    </div>
<div>
      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Points</th>
      <th scope="col">Frequency</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Good sport</td>
      <td>Recieved at least 1 favourite opponent vote</td>
      <td>1 point</td>
      <td>Once per tournament</td>
      <td><div class="btn-toolbar gap-2 d-grid d-md-flex justify-content-md-end " role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group me-2" role="group" aria-label="First group">
          <button type="button" class="btn btn-outline-secondary"><i class="bi bi-pencil"></i></button>
          <button type="button" class="btn btn-outline-secondary"><i class="bi bi-trash"></i></button>
        </div>
        </div></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Looking Good</td>
      <td>Recieved at least 1 coolest army vote</td>
      <td>1 point</td>
      <td>Once per tournament</td>
      <td><div class="btn-toolbar gap-2 d-grid d-md-flex justify-content-md-end " role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group me-2" role="group" aria-label="First group">
          <button type="button" class="btn btn-outline-secondary"><i class="bi bi-pencil"></i></button>
          <button type="button" class="btn btn-outline-secondary"><i class="bi bi-trash"></i></button>
        </div>
        </div></td>
    </tr>

  </tbody>
</table>
</div>






      <!-- <div>
      <h6>Bonus Points</h6>
      <p>Bonuses - space for the TO to create a custom scoring option that will appear as a toggle or checkbox during the tournament to quickly apply some kind of bonus points (e.g. achieving all secondaries get you a bonus 5 points or something)</p>
      <p></p>
      </div>
      <div class="row mb-3">
  <div class="col">
    <div class="form-floating">

    <input type="text" class="form-control" id="floatingInput" placeholder="Bonus item label" aria-label="Bonus item label">
    <label for="floatingInput">Bonus item label</label>
  </div>
  </div>
  <div class="col">
  <div class="form-floating">
    <input type="number" class="form-control" placeholder="Points" aria-label="Points">
    <label for="floatingInput">Points</label>
  </div>
</div>
</div>
<div>
<button type="button" class="btn btn-grad mb-3">Add Custom Bonus</button>
      </div> -->

<br>
      <hr>
      <h5 id="list-item-5">Results Calculation</h5>
      <div class="container">
        <div class="row">
<div class="col-11">
  <p>Add factors to determine ladder rankings in order from most important to least important.</p>
</div>
        <div class="col">
            <div class="d-grid d-md-flex justify-content-md-end mb-3">
      <button class="btn btn-grad" type="button">
         +</button>
      </div>
</div>

<div>

      <div class="form-floating mb-3">
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
          <option selected></option>
          <option value="1">Win/Loss points</option>
          <option value="2">Opponent Win %</option>
          <option value="3">VP</option>
          <option value="4">Strength of Schedule</option>
          <option value="5">VP differential</option>
          <option value="6">Total points</option>
          <option value="7">Favourite opponent votes</option>
          <option value="8">Fairplay points</option>
          <option value="9">Paint score</option>
        </select>
        <label for="floatingSelect">1st</label>
        </div>
        <p>Repeat the above field each time the '+' button is clicked.</p>

      <p></p>
      </div>
      <hr>
      <div class="container">
      <h5 id="list-item-6">Game System</h5>
      <p></p>
        <div class="form-floating mb-3">
          <input type="number" class="form-control" id="floatingInput" placeholder="">
          <label for="floatingInput">Army points limit</label>
        </div>
      <p></p>
        <div class="form-floating mb-3">
          <input type="date" class="form-control" id="floatingInput" placeholder="">
          <label for="floatingInput">List submission cutoff date</label>
        </div>
      <p>Battleplans</p>
      <p>Put in a number of fields equal to the number of rounds selected with dropdowns to select missions?</p>
      <p></p>

        <div class="form-floating mb-3">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
          <label for="floatingTextarea2">FAQ and House Rules</label>
        </div>
      <p></p>
        <div class="form-floating mb-3">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
          <label for="floatingTextarea2">Terrain</label>
        </div>
        </div>
      <hr>
      <div class="container">
      <h5 id="list-item-7">Hobby & Sports</h5>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">Include hobby points in total tournament score</label>
      </div>
      <p></p>
      <p>Add a painting rubrick/checklist (modal)</p>
      <li>2 options here - either a line by line list of painting stuff with associated points (and the ability to apply a max cap) or brackets associated with levels of painting prowess achieved (e.g. Basic = 5pts, Intermediate = 10pts, Advanced=15pts etc etc)</li>
      <p></p>
      <div class="form-check form-switch mb-3">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" checked onclick="displayFields()">
        <label class="form-check-label" for="flexSwitchCheckDefault">Enable coolest army voting</label>
      </div>

      <div id="formFields">
        <div class="row">
        <div class="col">
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" placeholder="">
          <label for="floatingInput">1st Choice Points</label>
          </div>
        </div>
        <div class="col">
          <div class="form-floating mb-3">
          <input type="number" class="form-control" id="floatingInput" placeholder="">
          <label for="floatingInput">2nd Choice Points</label>
          </div>
        </div>
        <div class="col">
          <div class="form-floating mb-3">
          <input type="number" class="form-control" id="floatingInput" placeholder="">
          <label for="floatingInput">3rd Choice Points</label>
          </div>
        </div>
      </div>
      </div>
      <p></p>




      <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Include sportsmanship points in total tournament score</label>
          </div>

      <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Add a fairplay checklist</label>
          </div>
<p></p>
          <div class="row">
        <div class="col-10">
          <div class="form-floating mb-3">
          <input class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></input>
          <label for="floatingTextarea">Question 1</label>
          </div>
        </div>
      <div class="col-2">
        <div class="form-floating mb-3">
          <input type="number" class="form-control" id="floatingInput" placeholder="">
          <label for="floatingInput">Points</label>
        </div>
      </div>
      </div>

      <div class="row">
        <div class="col-10">
          <div class="form-floating mb-3">
          <input class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></input>
          <label for="floatingTextarea">Question 2</label>
          </div>
        </div>
      <div class="col-2">
        <div class="form-floating mb-3">
          <input type="number" class="form-control" id="floatingInput" placeholder="">
          <label for="floatingInput">Points</label>
        </div>
      </div>
      </div>

      <div class="row">
        <div class="col-10">
          <div class="form-floating mb-3">
          <input class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></input>
          <label for="floatingTextarea">Question 3</label>
          </div>
        </div>
      <div class="col-2">
        <div class="form-floating mb-3">
          <input type="number" class="form-control" id="floatingInput" placeholder="">
          <label for="floatingInput">Points</label>
        </div>
      </div>
      </div>

      <div class="row">
        <div class="col-10">
          <div class="form-floating mb-3">
          <input class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></input>
          <label for="floatingTextarea">Question 4</label>
          </div>
        </div>
      <div class="col-2">
        <div class="form-floating mb-3">
          <input type="number" class="form-control" id="floatingInput" placeholder="">
          <label for="floatingInput">Points</label>
        </div>
      </div>
      </div>

      <div class="row">
        <div class="col-10">
          <div class="form-floating mb-3">
          <input class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></input>
          <label for="floatingTextarea">Question 5</label>
          </div>
        </div>
      <div class="col-2">
        <div class="form-floating mb-3">
          <input type="number" class="form-control" id="floatingInput" placeholder="">
          <label for="floatingInput">Points</label>
        </div>
      </div>
      </div>

          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Enable favourite opponent voting</label>
          </div>
      <p></p>
<div class="row">
  <div class="col">
  <div class="form-floating mb-3">
  <input type="number" class="form-control" id="floatingInput" placeholder="">
  <label for="floatingInput">1st Choice Points</label>
  </div>
  </div>
  <div class="col">
  <div class="form-floating mb-3">
  <input type="number" class="form-control" id="floatingInput" placeholder="">
  <label for="floatingInput">2nd Choice Points</label>
  </div>
  </div>
  <div class="col">
  <div class="form-floating mb-3">
  <input type="number" class="form-control" id="floatingInput" placeholder="">
  <label for="floatingInput">3rd Choice Points</label>
  </div>
  </div>
</div>
</div>
<hr>

      <h5 id="list-item-8">Awards & Badges</h5>
      <p>Prizes description (include the ability to set a rule so that the system can automatically select the appropraite winners based on event data)</p>
      <p>Special achievements/awards available and the badges associated with them</p>
      <p>Which of the following prize categories will be on offer at your tournament?</p>
      <div class="container">
      <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Podium (first, second & third place)
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Best sports (player voted)
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Best painted (judges decision)
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Coolest army (player voted)
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Wooden spoon (last place)
  </label>
</div>
<br>
      <button type="button" class="btn btn-grad">Add Custom Prize</button>
      <p>Add custom open modal including Title & description fields</p>
      </div>
    </div>
  </div>
</div>


<!-- Add Ticket Modal -->
<div class="modal fade" id="addTicketModal" tabindex="-1" aria-labelledby="addTicketModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addTicketModal">Add Ticket</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  <div class="form-floating mb-3">
  <input class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></input>
  <label for="floatingTextarea">Ticket Name</label>
</div>
<div class="form-floating mb-3">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Description (optional)</label>
</div>
<div class="row">
<div class="col">
  <div class="form-floating mb-3">
    <input type="number" class="form-control" id="floatingInput" placeholder="">
    <label for="floatingInput">Ticket quantity</label>
  </div>
</div>
<div class="col">
  <div class="input-group mb-3">
    <span class="input-group-text">$</span>
    <div class="form-floating">
      <input type="number" class="form-control" id="floatingInput" placeholder="">
      <label for="floatingInput">Ticket fee</label>
    </div>
  </div>
</div>
    <div class="col">
    <div class="form-floating">
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
    <option selected>Select Currency</option>
    <option value="1">USD</option>
    <option value="2">GBP</option>
    <option value="3">AUD</option>
  </select>
  <label for="floatingSelect">Currency</label>
</div>
</div>
</div>
  <div class="card text-bg-light mb-3">
    <ul class="list-unstyled card-body">
    <li><strong>What the buyer pays</strong></li>
    <li>Ticket price $0.00</li>
    <li><strong>What you get paid</strong></li>
    <li>Total buyer pays $0.00</li>
    <li>Service fee $0.00</li>
    <li>Ticket revenue $0.00</li>
    </ul>
  </div>
  <div class="row">
    <div class="col">
  <div class="form-floating mb-3">
  <input type="date" class="form-control" id="floatingInput" placeholder="">
  <label for="floatingInput">Ticket sale starts</label>
  </div>
  </div>
  <div class="col">
    <div class="form-floating mb-3">
    <input type="time" class="form-control" id="floatingInput" placeholder="">
    <label for="floatingInput">Ticket sale starts</label>
    </div>
  </div>
  <div class="col">
  <div class="form-floating mb-3">
  <input type="date" class="form-control" id="floatingInput" placeholder="">
  <label for="floatingInput">Ticket sale ends</label>
  </div>
</div>
<div class="col">
  <div class="form-floating mb-3">
  <input type="time" class="form-control" id="floatingInput" placeholder="">
  <label for="floatingInput">Ticket sale ends</label>
  </div>
</div>
  </div>
<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
  <label for="floatingTextarea2">Ticket Policy</label>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Add Penalty Modal -->
<div class="modal fade" id="addPenalty" tabindex="-1" aria-labelledby="addPenalty" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addTicketModal">Add Penalty</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-floating mb-3">
  <input class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></input>
  <label for="floatingTextarea">Penalty name</label>
</div>
<div class="form-floating mb-3">
  <input class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></input>
  <label for="floatingTextarea">Penalty description</label>
</div>
<div class="form-floating mb-3">
  <input type="number" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></input>
  <label for="floatingTextarea">Penalty points</label>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
      </div>
      </div>
      </div>




<script>





</script>



</body>

<?php
include $doc."core/sl_container_close.php";
include $doc.'core/sl_foot.php';
?>
