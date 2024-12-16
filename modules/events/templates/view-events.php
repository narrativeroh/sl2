<link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
<br/><div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="form-floating mb-3">
        <?php echo gameSystemsFilter('');?>
      </div>
    </div>
    <div class="col-md-6">
      <form name="search" method="get" action="">
        <div class="input-group input-group-lg mb-3">
          <input type="text" class="form-control" placeholder="search" name="q" value="">
          <button class="btn btn-outline-secondary" type="button"><i class="bi bi-search"></i></button>
        </div>
      </form>
    </div>
    <div class="col-md-3">
      <a class="btn btn-lg btn-grad-2" href="" style="width: 100%;">+ New Event</a>
    </div>
  </div>
</div>
<br/>
<div class="container-fluid">

<div class="row">

  <div class="col-md-4 col-lg-3">
    <div class="card">
      <div class="card-image text-center" style=" height: 150px; background-image: url('<?php echo $pub;?>uploads/8/samplebanner.jpg');background-size: cover;">
      </div>
      <div class="card-body">
        <h5 class="card-title text-white">Event Name</h5>
        <p style="line-height: 0.7rem; font-size: 0.7rem; color: #999999;">Jan 25 - Jan 27, 2024</p>
        <p class="card-text text-warning">This event is pending</p>
        <div>
          <div class="float-start" style="margin-right: 10px; background-color: #ffcc00; border-radius: 20px; color: #000; width: 30px; height: 30px; text-align: center;"><img src="<?php echo $pub;?>assets/aos.svg" width="20"/></div>
          <div class="float-start" style="padding-top: 4px;">0/0 Tickets Sold</div>
        </div>
        <a href="#" class="float-end btn btn-grad-2">Manage</a>
      </div>
    </div>
  </div>



</div>


</div>
