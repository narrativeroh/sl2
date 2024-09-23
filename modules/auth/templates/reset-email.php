<?php
  $result = checkResetEmail($_GET['email'], $_GET['code']);
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
           The link you clicked appears to be invalid. Please try updating your email address and trying again.
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
             Your email address has been updated. You will need to <a href="<?php echo $pub;?>login/" class="text-link">Login</a> to Stats & Ladders again with your new email address.
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
}?>
