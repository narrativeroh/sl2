<?php
  $result = checkResetCode($_GET['email'], $_GET['code']);
  if($result <> 1)
  {
    ?>
    <div class="d-flex align-items-center justify-content-center vh-100">

      <div class="container-fluid"><div class="row">
      <div class="col-sm-3 col-lg-4"></div>
      <div class="col-sm-6 col-lg-4">

      <div class="card">
        <div class="card-body text-center">

         <br/><img src="<?php echo $pub;?>assets/SL_Logo.png" width="64"/><br/><br/>
         <h1>OH NOES!</h1><br/>
         <div class="alert alert-sl text-start"><i class="bi bi-exclamation-triangle"></i>
           It seems that this link has expired! Please <a href="<?php echo $pub;?>reset-password/" class="text-link">request a new link</a> and try again.
         </div>
         <br/>
          <br/>
        </div>
      </div>

     </div>
     <div class="col-sm-3 col-lg-4"></div>
     </div>
     </div>

    </div>
    <?php
  }
  else {

    if($_POST['password']<>"")
    {
      $err = resetPwd($_GET['email'], $_POST['password'], $_POST['confirm']);
    }
    if($err==1)
    {
      ?>
      <div class="d-flex align-items-center justify-content-center vh-100">

        <div class="container-fluid"><div class="row">
        <div class="col-sm-3 col-lg-4"></div>
        <div class="col-sm-6 col-lg-4">

        <div class="card">
          <div class="card-body text-center">

           <br/><img src="<?php echo $pub;?>assets/SL_Logo.png" width="64"/><br/><br/>
           <h1>Hooray!</h1><br/>
           <p>
             Your password has been reset. <a href="<?php echo $pub;?>login/" class="text-link">Login</a> to Stats & Ladders now!
           </p>
           <br/>
            <br/>
          </div>
        </div>

       </div>
       <div class="col-sm-3 col-lg-4"></div>
       </div>
       </div>

      </div>
      <?php

    }else {
?>

<div class="d-flex align-items-center justify-content-center vh-100">

  <div class="container-fluid"><div class="row">
  <div class="col-sm-3 col-lg-4"></div>
  <div class="col-sm-6 col-lg-4">

  <div class="card">
    <div class="card-body text-center">

     <br/><img src="<?php echo $pub;?>assets/SL_Logo.png" width="64"/><br/><br/>
     <h1>RESET YOUR PASSWORD</h1><br/>
     <?php if($err <>""){?>
     <div class="alert alert-sl text-start"><i class="bi bi-exclamation-triangle"></i> <?php echo $err;?></div>
     <?php }?><br/>
      <form method="post" action="">
        <div class="form-floating mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $_POST['password'];?>">
          <label for="floatingInput">Password</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" name="confirm" placeholder="Confirm Password" value="<?php echo $_POST['confirm'];?>"
          <label for="floatingInput">Confirm Password</label>
        </div>
        <br/>
        <button type="submit" class="btn btn-grad btn-lg">RESET PASSWORD</button>
      </form><br/>
    </div>
  </div>

 </div>
 <div class="col-sm-3 col-lg-4"></div>
 </div>
 </div>

</div>
<?php }}?>
