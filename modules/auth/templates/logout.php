<?php
$result = authLogout();
?>
<div class="d-flex align-items-center justify-content-center vh-100">

  <div class="container-fluid"><div class="row">
  <div class="col-sm-3 col-lg-4"></div>
  <div class="col-sm-6 col-lg-4">

  <div class="card">
    <div class="card-body text-center">

     <br/><img src="<?php echo $pub;?>assets/SL_Logo.png" width="64"/><br/><br/>
     <h1>LOGOUT SUCCESS</h1><br/>

     <p>Hold tight while we get ourselves organised...</p><br/>
     <p class="d-none" id="took-too-long">Nothing happening? <a href="<?php echo $pub;?>login/" class="text-link">click here</a></p>
    </div>
  </div>

 </div>
 <div class="col-sm-3 col-lg-4"></div>
 </div>
 </div>

</div>
<script>
setTimeout(function () {
 window.location.href = "<?php echo $pub;?>login/"; //will redirect to your blog page (an ex: blog.html)
}, 2000); //will call the function after 2 secs.
setTimeout(function () {
 $('#took-too-long').removeClass('d-none');
}, 3000); //will call the function after 2 secs.

</script>
