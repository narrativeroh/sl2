<link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>

<div class="toast-container position-fixed d-flex justify-content-center align-items-center w-100">
  <div id="errToast" class="toast  bg-danger text-bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body">
      <button type="button" class="btn-close float-end" data-bs-dismiss="toast" aria-label="Close"></button>
      Unable to create new event. Please contact us.
    </div>
  </div>
</div>
<br/>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="form-floating mb-3">
        <?php echo gameSystemsFilter('');?>
      </div>
    </div>
    <div class="col-md-6">
      <form name="search" method="get" action="">
        <div class="input-group input-group-lg mb-3" style="height: 58px;">
          <input type="text" class="form-control" placeholder="search" name="q" value="">
          <button class="btn btn-outline-secondary" type="button"><i class="bi bi-search"></i></button>
        </div>
      </form>
    </div>
    <div class="col-md-3">
      <a class="btn btn-lg btn-grad-2" href="javascript:newEvent();" style="width: 100%; height: 58px; line-height: 40px;">+ New Event</a>
    </div>
  </div>
</div>
<br/>
<div class="container-fluid">

<div class="row">

  <?php
  //get events
  $events = getEvents();
  if($events<>"")
  {
    foreach($events as $ev)
    {
      ?>
      <div class="col-md-4 col-lg-3">
        <div class="card">
          <div class="card-image text-center" style=" height: 150px; background-image: url('<?php echo $pub;?>uploads/8/samplebanner.jpg');background-size: cover;">
          </div>
          <div class="card-body">
            <h5 class="card-title text-white"><?php echo $ev['event_name'];?></h5>
            <p style="line-height: 0.7rem; font-size: 0.7rem; color: #999999;">Victoria, Australia<br/>Jan 25 - Jan 27, 2024</p>
            <?php
            if($ev['event_status']==1){echo "<p class=\"card-text text-warning\">This event is pending</p>";}
            ?>
            <div>
              <div class="float-start" style="margin-right: 10px; background-color: #ffcc00; border-radius: 20px; color: #000; width: 30px; height: 30px; text-align: center;"><img src="<?php echo $pub;?>assets/aos.svg" width="20"/></div>
              <div class="float-start" style="padding-top: 4px;">0/30 Places</div>
            </div>
            <a href="<?php echo $pub;?>my-events/?e=<?php echo $ev['event_hash'];?>" class="float-end btn btn-grad-2">Manage</a>
          </div>
        </div>
      </div>
      <?php
    }
  }

  ?>




</div>


</div>



<script>
function newEvent()
{
  $.ajax({
      url: '<?php echo $pub;?>modules/events/templates/new-event.php',
      type: 'get',
      contentType: false,
      processData: false,
      success: function(data)
      {
          if(data != "err")
          {
            $(location).prop('href', '<?php echo $pub;?>my-events/?e='+data);
          }
          else
          {
            const errToast = document.getElementById('errToast');
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(errToast);
            toastBootstrap.show()
          }
      }
  });
}
</script>
