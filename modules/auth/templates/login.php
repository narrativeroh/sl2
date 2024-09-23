<?php
 if(isset($_POST['email']))
 {
   $mysession = session_id();
   $result = authlogin($mysession, $_POST['email'], $_POST['key']);
   if($result<>1)
   {
     $err = $result;
   }
   ?>
   <div class="d-flex align-items-center justify-content-center vh-100">

     <div class="container-fluid"><div class="row">
     <div class="col-sm-3 col-lg-4"></div>
     <div class="col-sm-6 col-lg-4">

     <div class="card">
       <div class="card-body text-center">

        <br/><img src="<?php echo $pub;?>assets/SL_Logo.png" width="64"/><br/><br/>
        <h1>LOGIN SUCCESS</h1><br/>

        <p>Hold tight while we get ourselves organised...</p><br/>
        <p class="d-none" id="took-too-long">Nothing happening? <a href="<?php echo $pub;?>" class="text-link">click here</a></p>
       </div>
     </div>

    </div>
    <div class="col-sm-3 col-lg-4"></div>
    </div>
    </div>

  </div>
  <script>
  setTimeout(function () {
    window.location.href = "<?php echo $pub;?>"; //will redirect to your blog page (an ex: blog.html)
  }, 2000); //will call the function after 2 secs.
  setTimeout(function () {
    $('#took-too-long').removeClass('d-none');
  }, 3000); //will call the function after 2 secs.

  </script>

   <?php
 }
 ?>
 <div class="d-flex align-items-center justify-content-center vh-100">

   <div class="container-fluid"><div class="row">
   <div class="col-sm-3 col-lg-4"></div>
   <div class="col-sm-6 col-lg-4">

   <div class="card">
     <div class="card-body text-center">

      <br/><img src="<?php echo $pub;?>assets/SL_Logo.png" width="64"/><br/><br/>
      <h1>LOGIN</h1><br/>
      <?php if($err <>""){?>
      <div class="alert alert-info text-start"><i class="bi bi-exclamation-triangle"></i> <?php echo $err;?></div>
      <?php }?>
      <p>Don't have an account? <a href="<?php echo $pub;?>signup/" class="text-link">Sign up now</a></p><br/>
       <form method="post" action="">
         <div class="form-floating mb-3">
           <input type="email" class="form-control" name="email" placeholder="name@example.com">
           <label for="floatingInput">Email address</label>
         </div>
         <div class="form-floating">
           <input type="password" class="form-control" name="key" placeholder="Password">
           <label for="floatingPassword">Password</label>
         </div><br/>
         <button type="submit" class="btn btn-grad btn-lg">LOGIN</button>
       </form><br/>
       <p>Forgot your password? <a href="<?php echo $pub;?>reset-password/" class="text-link">Recover it here</a></p>
     </div>
   </div>

  </div>
  <div class="col-sm-3 col-lg-4"></div>
  </div>
  </div>

</div>
