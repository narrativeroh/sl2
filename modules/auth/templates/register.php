<?php
 if(isset($_POST['email']))
 {
   $err = registerUser($_POST['email'], $_POST['name'], $_POST['region'], $_POST['gamesystems'], $_POST['terms']);
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
        <p>Thanks for signing up! We have sent you an email with a link to complete your sign up and set a password. Please check your spam mailbox just incase it is hiding there.</p>
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
 <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
 <div class="d-flex align-items-center justify-content-center vh-100">

   <div class="container-fluid"><div class="row">
   <div class="col-sm-3 col-lg-4"></div>
   <div class="col-sm-6 col-lg-4">

   <div class="card">
     <div class="card-body text-center">

      <br/><img src="<?php echo $pub;?>assets/SL_Logo.png" width="64"/><br/><br/>
      <h1>SIGN UP</h1><br/>
      <?php if($err <>""){?>
      <div class="alert alert-sl text-start"><i class="bi bi-exclamation-triangle"></i> <?php echo $err;?></div>
      <?php }?>
      <p>Already have an account? <a href="<?php echo $pub;?>login/" class="text-link">Login</a></p><br/>
       <form method="post" action="">
         <div class="form-floating mb-3">
           <input type="text" class="form-control" name="name" placeholder="Display Name" value="<?php echo $_POST['name'];?>">
           <label for="floatingInput">Display Name</label>
         </div>
         <div class="form-floating mb-3">
           <input type="email" class="form-control" name="email" placeholder="name@example.com" value="<?php echo $_POST['email'];?>">
           <label for="floatingInput">Email address</label>
         </div>
         <div class="form-floating mb-3">
             <?php echo regionsSelect($_POST['region']);?>
         </div>
         <div class="form-floating mb-3">
           <?php echo gameSystemsSelect($_POST['gamesystems']);?>
         </div>
         <div class="form-check form-switch">
           <input class="form-check-input" type="checkbox" role="switch" name="terms" value="1" <?php if($_POST['terms']==1){ echo " checked";}?>>
           <label class="form-check-label" for="flexSwitchCheckDefault">I agree to the Stats & Ladders <a href="#" class="text-link">Terms of Use</a> and <a href="#" class="text-link">Privacy Policy</a></label>
         </div>
         <br/>
         <button type="submit" class="btn btn-grad btn-lg">SIGN UP</button>
       </form><br/>
     </div>
   </div>

  </div>
  <div class="col-sm-3 col-lg-4"></div>
  </div>
  </div>

</div>
<?php } ?>
