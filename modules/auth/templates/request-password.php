<?php
if($_POST['email']<>"")
{
  $err = requestPwd($_POST['email']);
}
if($err == 1)
{
  ?>
  <div class="d-flex align-items-center justify-content-center vh-100">

    <div class="container-fluid"><div class="row">
    <div class="col-sm-3 col-lg-4"></div>
    <div class="col-sm-6 col-lg-4">

    <div class="card">
      <div class="card-body text-center">
       <br/><img src="<?php echo $pub;?>assets/SL_Logo.png" width="64"/><br/><br/>
       <p>We have sent you an email with a link to reset your password. Please check your spam mailbox just incase it is hiding there.</p>
       <p>Didn't get your email? <a href="mailto:support@statsandladders.com" class="text-link">Email us</a> and we can sort you out.</p>
     </div>
   </div>
   </div>
   </div>
   </div>
   </div>
  <?php
}
else {
 ?>
<div class="d-flex align-items-center justify-content-center vh-100">

  <div class="container-fluid"><div class="row">
  <div class="col-sm-3 col-lg-4"></div>
  <div class="col-sm-6 col-lg-4">

  <div class="card">
    <div class="card-body text-center">

     <br/><img src="<?php echo $pub;?>assets/SL_Logo.png" width="64"/><br/><br/>
     <h1>REQUEST PASSWORD</h1><br/>
     <?php if($err <>""){?>
     <div class="alert alert-sl text-start"><i class="bi bi-exclamation-triangle"></i> <?php echo $err;?></div>
     <?php }?>
     <p>Forgot your password? You can reset it here! Just type in your email address and we will email a reset link to you.</p>
     <p>Can't access your email? <a href="mailto:support@statsandladders.com" class="text-link">Email us</a> and we will sort you out.</p>
     <br/>

      <form method="post" action="">
        <div class="form-floating mb-3">
          <input type="email" class="form-control" name="email" placeholder="name@example.com" value="<?php echo $_POST['email'];?>">
          <label for="floatingInput">Email address</label>
        </div>
        <br/>
        <button type="submit" class="btn btn-grad btn-lg">REQUEST PASSWORD</button>
      </form><br/>
           <p>Already have your password? <a href="<?php echo $pub;?>login/" class="text-link">Login</a></p>
    </div>
  </div>

 </div>
 <div class="col-sm-3 col-lg-4"></div>
 </div>
 </div>

</div>
<?php }?>
