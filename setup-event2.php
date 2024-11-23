<?php
session_start();
include '../sl_conf.php';
include $doc.'modules/auth/functions/login.php';
$mysession = session_id();
$user = authcheck($mysession);
$menu = "Organiser";
if(!is_array($user))
{
  header('Location: '.$pub.'login/');
}
include $doc.'core/sl_head.php';
include $doc."core/sl_menu.php";

?>
<!--top banner -->
<div class="organiser-progress-banner d-flex flex-column min-vh-70" style="background-image: linear-gradient(to right, #0346AE 0%, #DD2476 100%);">
  <div class="d-flex flex-grow-1 justify-content-center align-items-center p-5 text-white">
    <div class="container-fluid">
      <div class="row">
        <h1>NEW TOURNAMENT</h1>
        <p></p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h4>1: SETTINGS</h4>
          <p>This is where you define the primary settings for your tournament. Dont worry, no one can see your tournament until you publish it.We strongly recommend our PRESET options for an easy way to get the basics of your tournament setup.</p>

        </div>
        <div class="col-md-4 text-center" style="color: #ffffff99;">
        </div>
        <div class="col-md-4 text-end">
          <h4 style="display: inline; background: -webkit-linear-gradient(0deg, #FFFFFFFF 0%, #FFFFFF00 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">2: REGISTRATION</h4>
          <br/><br/><button class="btn btn-dark">PREVIEW</button> <button class="btn btn-grad-2">PUBLSIH & NEXT</button>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="progress-stacked">
            <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
              <div class="progress-bar" style="color: #FFFFFF; background-image: linear-gradient(to right, #0346AE 0%, #DD2476  100%);">SETTINGS</div>
            </div>
            <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
              <div class="progress-bar bg-dark" style="color: #666666;">REGISTRATION</div>
            </div>
            <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
              <div class="progress-bar bg-dark" style="color: #666666;">RUNNING</div>
            </div>
            <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
              <div class="progress-bar bg-dark" style="color: #666666;">COMPLETE</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br/>
<!-- scroll spy and form -->
<div class="Container-fluid">
  <div class="row">
    <div class="col-lg-3 col-md-4"> <!-- Scroll Spy -->

          <nav id="settings-menu" class="flex-column align-items-stretch sticky-top" style="top: 86px;">
            <div class="list-group bg_dark flex-column">
              <a class="list-group-item list-group-item-action text-info" href="#presets"><span class="list-group-inner-item"><i class="bi bi-check-circle-fill"></i> PRESETS</span></a>
              <a class="list-group-item list-group-item-action text-secondary" href="#event-info"><span class="list-group-inner-item"><i class="bi bi-exclamation-circle-fill"></i> EVENT INFO</span></a>
              <a class="list-group-item list-group-item-action text-secondary" href="#game-system"><span class="list-group-inner-item"><i class="bi bi-exclamation-circle-fill"></i> GAME SYSTEM</span></a>
              <a class="list-group-item list-group-item-action text-secondary" href="#tickets"><span class="list-group-inner-item"><i class="bi bi-exclamation-circle-fill"></i> TICKETS</span></a>
              <a class="list-group-item list-group-item-action text-secondary" href="#scoring"><span class="list-group-inner-item"><i class="bi bi-exclamation-circle-fill"></i> SCORING</span></a>
              <a class="list-group-item list-group-item-action text-secondary" href="#penalties"><span class="list-group-inner-item"><i class="bi bi-exclamation-circle-fill"></i> PENALTIES</span></a>
              <a class="list-group-item list-group-item-action text-secondary" href="#results"><span class="list-group-inner-item"><i class="bi bi-exclamation-circle-fill"></i> RESULTS</span></a>
              <a class="list-group-item list-group-item-action text-secondary" href="#rankings"><span class="list-group-inner-item"><i class="bi bi-exclamation-circle-fill"></i> RANKINGS</span></a>
              <a class="list-group-item list-group-item-action text-secondary" href="#docs"><span class="list-group-inner-item"><i class="bi bi-exclamation-circle-fill"></i> DOCUMENTS</span></a>
              <a class="list-group-item list-group-item-action text-warning" href="#badges"><span class="list-group-inner-item"><i class="bi bi-info-circle-fill"></i> BADGES</span></a>
            </div>
          </nav>

    </div><!-- End Scroll Spy -->
    <div class="col-lg-9  col-md-8"> <!-- Form -->

      <div class="card"><!-- Organisers bar -->
        <div class="card-body">
          <h4 style="display: inline;">Organisers</h4>&nbsp;&nbsp;&nbsp;
          <img id="menu-avatar"  style="margin-top: -10px; margin-right: -20px;" class="menu-avatar" src="<?php echo $user_url;?>"/>
          <img id="menu-avatar"  style="margin-top: -10px; margin-right: -20px;" class="menu-avatar" src="<?php echo $pub;?>assets/default-user.png"/>
          &nbsp;<button class="btn btn-dark" style="margin-top: -10px; margin-left: 20px;"><i class="bi bi-pencil-square"></i></button>
        </div>
      </div><br/>

      <div data-bs-spy="scroll" data-bs-target="#settings-menu" data-bs-offset="0" class="settings-menu" tabindex="0">

        <!-- Presets -->
        <div id="presets" style="float: left; position: absolute; margin-top: -86px;"></div>
        <div class="card">
          <div class="card-header"><h4><i class="bi bi-check-circle-fill text-info"></i> PRESETS</h4></div>
          <div class="card-body"><br/><br/><br/><br/><br/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><bR/><br/><br/></div>
        </div><br/>

        <!-- Info -->
        <div id="event-info" style="float: left; position: absolute; margin-top: -86px;"></div>
        <div class="card">
          <div class="card-header"><h4><i class="bi bi-exclamation-circle-fill text-danger"></i> EVENT INFO</h4></div>
          <div class="card-body"><br/><br/><br/><br/><br/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><bR/><br/><br/></div>
        </div><br/>

        <!-- Game System -->
        <div id="game-system" style="float: left; position: absolute; margin-top: -86px;"></div>
        <div class="card">
          <div class="card-header"><h4><i class="bi bi-exclamation-circle-fill text-danger"></i> GAME SYSTEM</h4></div>
          <div class="card-body"><br/><br/><br/><br/><br/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><bR/><br/><br/></div>
        </div><br/>

        <!-- Tickets -->
        <div id="tickets" style="float: left; position: absolute; margin-top: -86px;"></div>
        <div class="card">
          <div class="card-header"><h4><i class="bi bi-exclamation-circle-fill text-danger"></i> TICKETS</h4></div>
          <div class="card-body"><br/><br/><br/><br/><br/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><bR/><br/><br/></div>
        </div><br/>

        <!-- Scoring -->
        <div id="scoring" style="float: left; position: absolute; margin-top: -86px;"></div>
        <div class="card">
          <div class="card-header"><h4><i class="bi bi-exclamation-circle-fill text-danger"></i> SCORING</h4></div>
          <div class="card-body"><br/><br/><br/><br/><br/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><bR/><br/><br/></div>
        </div><br/>

        <!-- Penalties -->
        <div id="penalties" style="float: left; position: absolute; margin-top: -86px;"></div>
        <div class="card">
          <div class="card-header"><h4><i class="bi bi-exclamation-circle-fill text-danger"></i> PENALTIES</h4></div>
          <div class="card-body"><br/><br/><br/><br/><br/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><bR/><br/><br/></div>
        </div><br/>

        <!-- Results -->
        <div id="results" style="float: left; position: absolute; margin-top: -86px;"></div>
        <div class="card">
          <div class="card-header"><h4><i class="bi bi-exclamation-circle-fill text-danger"></i> RESULTS</h4></div>
          <div class="card-body"><br/><br/><br/><br/><br/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><bR/><br/><br/></div>
        </div><br/>

        <!-- RANKINGS -->
        <div id="rankings" style="float: left; position: absolute; margin-top: -86px;"></div>
        <div class="card">
          <div class="card-header"><h4><i class="bi bi-exclamation-circle-fill text-danger"></i> RANKINGS</h4></div>
          <div class="card-body"><br/><br/><br/><br/><br/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><bR/><br/><br/></div>
        </div><br/>

        <!-- DOCUMENTS & FILES -->
        <div id="docs" style="float: left; position: absolute; margin-top: -86px;"></div>
        <div class="card">
          <div class="card-header"><h4><i class="bi bi-exclamation-circle-fill text-danger"></i> DOCUMENTS & FILES</h4></div>
          <div class="card-body"><br/><br/><br/><br/><br/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><bR/><br/><br/></div>
        </div><br/>

        <!-- BADGES -->
        <div id="badges" style="float: left; position: absolute; margin-top: -86px;"></div>
        <div class="card">
          <div class="card-header"><h4><i class="bi bi-info-circle-fill text-warning"></i> BADGES</h4></div>
          <div class="card-body"><br/><br/><br/><br/><br/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><bR/><br/><br/><br/><br/><bR/><br/><br/></div>
        </div><br/>

      </div>
    </div><!-- End Form -->
  </div>
</div>


<?php
include $doc."core/sl_container_close.php";
include $doc.'core/sl_foot.php';
?>
