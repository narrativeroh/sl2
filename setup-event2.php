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
<div class="organiser-progress-banner d-flex flex-column min-vh-70" style="background-color: #333333; background-position: center center; background-blend-mode: overlay; background-image: url('<?php echo $pub;?>uploads/8/samplebanner.jpg'); background-size: cover;">
  <div class="d-flex flex-grow-1 justify-content-center align-items-center p-5 text-white">
    <div class="container-fluid">
      <div class="row">
        <h1>SAMPLE TOURNAMENT NAME <button class="btn btn-lg btn-dark"><i class="bi bi-gear-fill"></i></button></h1>
        <p></p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h4>2: REGISTRATION</h4>
          <p>Track your ticket sales and see who has signed up for your tournament.<br/><br/>Check over submitted lists, set up grudge matches and promote your event!</p>

        </div>
        <div class="col-md-4 text-center" style="color: #ffffff99;">
        </div>
        <div class="col-md-4 text-end">
          <h4 style="display: inline; background: -webkit-linear-gradient(0deg, #FFFFFFFF 0%, #FFFFFF00 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">3: RUN EVENT</h4>
          <br/><br/><button class="btn btn-grad-2">START EVENT</button>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="progress-stacked">
            <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
              <div class="progress-bar" style="color: #FFFFFF; background-image: linear-gradient(to right, #0346AE 0%, #DD2476  100%);">SETTINGS</div>
            </div>
            <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
              <div class="progress-bar bg-dark" style="color: #FFFFFF; background-image: linear-gradient(to right, #DD2476 0%, #EDA00A 100%);">REGISTRATION</div>
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

<div class="Container-fluid">
  <div class="row">
    <div class="col-12">

      <div class="card"><!-- Organisers bar -->
        <div class="card-body">
          <h4 style="display: inline;">Organisers</h4>&nbsp;&nbsp;&nbsp;
          <img id="menu-avatar"  style="margin-top: -10px; margin-right: -20px;" class="menu-avatar" src="<?php echo $user_url;?>"/>
          <img id="menu-avatar"  style="margin-top: -10px; margin-right: -20px;" class="menu-avatar" src="<?php echo $pub;?>assets/default-user.png"/>
          &nbsp;<button class="btn btn-dark" style="margin-top: -10px; margin-left: 20px;"><i class="bi bi-pencil-square"></i></button>
          <button class="btn btn-grad-3 float-end">PROMOTE</button> <button class="btn btn-grad-2 float-end me-2">PUBLISH LISTS</button>
        </div>
      </div><br/>

      <div class="card"><!-- countdown -->
        <div class="card-body p-5 text-white text-center" style="background-image: linear-gradient(to right, #0346AE 0%, #DD2476 100%);">
          <p>Tournament starts</p>
          <h1 class="countdown">28 <span class="countdown-sm">DAYS</span> 17 <span class="countdown-sm">HRS</span> 47 <span class="countdown-sm">MINS</span>  32 <span class="countdown-sm">SECS</span></h1>
        </div>
      </div><br/>


    </div>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-6">

      <!-- TICKETS -->
      <div class="card">
        <div class="card-body">

          <table class="table table-striped">
            <thead>
              <tr>
                <th class="text-white" style="padding-bottom: 20px;">TICKETS</th>
                <th class="text-end text-white" style="padding-bottom: 20px;">40/80</th>
                <th width="50%" style="padding-bottom: 20px;">
                  <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style=" height: 28px;">
                    <div class="progress-bar" style="width: 70%; background-color: #2FA5FF;"></div>
                  </div>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="font-size: 0.75rem;">Standard</td>
                <td  style="font-size: 0.75rem;" class="text-end">30/40</td>
                <td>
                  <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style=" height: 20px;">
                    <div class="progress-bar" style="width: 75%; background-color: #DD2476;"></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td style="font-size: 0.75rem;">Club</td>
                <td  style="font-size: 0.75rem;" class="text-end">25/39</td>
                <td>
                  <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style=" height: 20px;">
                    <div class="progress-bar" style="width: 64%; background-color: #FF512F;"></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td style="font-size: 0.75rem;">VIP</td>
                <td  style="font-size: 0.75rem;" class="text-end">1/1</td>
                <td>
                  <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style=" height: 20px;">
                    <div class="progress-bar" style="width: 100%; background-color: #EDA00A;"></div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>

        </div>
      </div><br/>

    </div>
    <div class="col-lg-8 col-md-6">

    </div>
  </div>
</div>


<?php
include $doc."core/sl_container_close.php";
include $doc.'core/sl_foot.php';
?>
