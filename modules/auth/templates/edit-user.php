<?php
if($_POST['displayname']<>"")
{
  $err = editUser($_POST['displayname'], $_POST['fname'], $_POST['lname'], $_POST['region'], $_POST['dob'], $_POST['bio']);
  if($err == 1)
  {
    $success = "Your profile information has been updated";
  }
}

if($_POST['resetpwd']<>"")
{
  $err2 = requestPwd($user['auth_email']);
  if($err2 == 1)
  {
    $success2 = "We have sent you a link to reset your password. Please check your email.";
  }
}

if($_POST['newemail']<>"")
{
  $err3 = resetEmail($_POST['newemail']);
  if($err3 == 1)
  {
    $success3 = "We have sent you a link to your new email address. Please check it for next steps.";
  }
}
?>


<link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
<br/><br/>
<div class="container">
<div class="row">
  <div class="col-12"><h2>Your Profile</h2></div>
</div>
<div class="row">
<div class="col-xl-4">
<div class="card mb-4 mb-xl-0">
         <div class="card-body text-center">
             <!-- Profile picture image-->
             <?php
              if($user['auth_img']<>"")
              {
                $user_url = $pub."uploads/".$user['auth_id']."/".$user['auth_img'];
              }
              else {
                $user_url = $pub."assets/default-user.png";
              }
             ?>
             <div class="profile-pic upload-area" id="upload-click" style="background-image: url('<?php echo $user_url;?>');">
             </div>
             <!-- Profile picture help block--><br/>
             <div class="alert alert-danger d-none" id="img_err_box"><i class="bi bi-exclamation-triangle"></i> <span id="img_err"></span></div>
             <div class="small font-italic text-muted mb-4">Drag and drop an image or click.<br/>JPG or PNG max size 1MB.</div>
         </div>
     </div>
     <input type="file" name="slImg" id="slImg" style="display: none;">
 </div>
 <div class="col-xl-8">
     <!-- Account details card-->
     <div class="card mb-4">
         <div class="card-body">
            <h4>Player ID: <span style="color: #ffffff; font-weight: bold;"><?php echo $user['auth_handle'];?></span></h4><p> (Your ID cannot be updated)</p>
             <form method="post" action="">

               <?php if($err <>1 && $err <> ""){?>
               <div class="alert alert-sl text-start"><i class="bi bi-exclamation-triangle"></i> <?php echo $err;?></div>
               <?php }?>
               <?php if($success <>""){?>
               <div class="alert alert-success text-start"><i class="bi bi-check-circle-fill"></i> <?php echo $success;?></div>
               <?php }?>

                  <!-- Form Group (username)-->
                 <div class="form-floating mb-3">
                   <input class="form-control" name="displayname" type="text" placeholder="Display Name" value="<?php echo $user['auth_name'];?>">
                   <label for="floatingInput">Display Name</label>
                 </div>
                 <div class="row">
                     <!-- Form Group (first name)-->
                     <div class="col-md-6">
                       <div class="form-floating mb-3">
                         <input class="form-control" name="fname" type="text" placeholder="First Name" value="<?php echo $user['auth_fname'];?>">
                         <label for="floatingInput">First Name</label>
                       </div>
                     </div>
                     <!-- Form Group (last name)-->
                     <div class="col-md-6">
                       <div class="form-floating mb-3">
                         <input class="form-control" name="lname" type="text" placeholder="Last Name" value="<?php echo $user['auth_lname'];?>">
                         <label for="floatingInput">Last Name</label>
                       </div>
                     </div>
                 </div>
                 <!-- Form Row        -->
                 <div class="row">
                     <!-- Form Group (location)-->
                     <div class="col-md-6">
                       <div class="form-floating mb-3">
                           <?php echo regionsSelect($user['auth_region']);?>
                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="form-floating mb-3">
                         <input class="form-control" name="dob" type="date" placeholder="Birthday" value="<?php echo $user['auth_dob'];?>">
                         <label for="floatingInput">birthday</label>
                       </div>
                     </div>
                 </div>
                 <div class="row">
                   <div class="col mb-3">
                     <div class="form-floating">
                       <textarea name="bio" class="form-control" placeholder="Your bio" style="height: 100px" maxlength="500"><?php echo $user['auth_bio'];?></textarea>
                       <label for="floatingTextarea2">Your Bio</label>
                     </div>
                   </div>
                 </div>
                 <!-- Save changes button-->
                 <button class="btn btn-grad" type="submit">UPDATE</button>
             </form>
         </div>
     </div>

     <div class="card mb-4">
         <div class="card-body">
           <button class="float-end btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#updateEmail">Change Email Address</button>
           <h4>Email: <span style="color: #ffffff; font-weight: bold;"><?php if($user['auth_new_email']<>""){echo $user['auth_new_email']." <span style=\"font-size: 0.75rem; padding: 5px;\" class=\"alert alert-sl\">PENDING</span>";}else{echo $user['auth_email'];}?></span></H4>
             <?php if($err3 <>1 && $err3 <> ""){?><br/>
             <div class="alert alert-sl text-start"><i class="bi bi-exclamation-triangle"></i> <?php echo $err3;?></div>
             <?php }?>
             <?php if($success3 <>""){?><br/>
             <div class="alert alert-success text-start"><i class="bi bi-check-circle-fill"></i> <?php echo $success3;?></div>
             <?php }?>
   </div>
  </div>

     <div class="card mb-4">
         <div class="card-body">
           <form id="reset-pwd-form" action="" method="post"><input name="resetpwd" type="hidden" value="1"/><button class="float-end btn btn-outline-light" type="submit">Change Password</button></form>
     <h4>Password: <span style="color: #ffffff; font-weight: bold;">*********</span></H4>
       <?php if($err2 <>1 && $err2 <> ""){?><br/>
       <div class="alert alert-sl text-start"><i class="bi bi-exclamation-triangle"></i> <?php echo $err2;?></div>
       <?php }?>
       <?php if($success2 <>""){?><br/>
       <div class="alert alert-success text-start"><i class="bi bi-check-circle-fill"></i> <?php echo $success2;?></div>
       <?php }?>
   </div>
  </div>


 </div>
</div>
</div>

<div class="modal fade" id="updateEmail" tabindex="-1" aria-labelledby="updateEmailLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="updateEmailLabel">Update Email Address</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
              <div class="form-floating mb-3">
                <input class="form-control" name="newemail" type="text" placeholder="Email Address"/>
                <label for="floatingInput">New Email Address</label>
              </div>
              <p><strong>NOTE:</strong> We will send an email to your new email address with a link to update it. Your email address will not change until you click that link.</p>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
          <button class="btn btn-grad" type="submit">SEND EMAIL</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
//drag and drop image OR click to upload
$(function() {

    // preventing page from redirecting
    $("html").on("dragover", function(e) {e.preventDefault();e.stopPropagation();});
    $("html").on("drop", function(e) { e.preventDefault(); e.stopPropagation(); });

    // Drag enter/over
    $('.upload-area').on('dragenter', function (e) {e.stopPropagation();e.preventDefault();});
    $('.upload-area').on('dragover', function (e) {e.stopPropagation();e.preventDefault();});

    // Drop
    $('.upload-area').on('drop', function (e) {
        e.stopPropagation();
        e.preventDefault();

				var file = e.originalEvent.dataTransfer.files;

				//validate
 				var fileName = file[0].name;
 				var patternFileExtension = /\.([0-9a-z]+)(?:[\?#]|$)/i;
 				var fileExtension = (fileName).match(patternFileExtension);
	 			if($.inArray(fileExtension[0], ['.png', '.jpg', '.jpeg']) >= 0)
				{
          //put img into input field
					$("#slImg").prop("files", e.originalEvent.dataTransfer.files);

	        //update bg
          saveProfileImg();

				}

    });

    // Open file selector on div click
    $("#upload-click").click(function(){$("#slImg").click();});

		// file selected
    $("#slImg").change(function(){
        //var fd = new FormData();
        var files = $('#slImg')[0].files;
				//validate
 				var fileName = files[0].name;
 				var patternFileExtension = /\.([0-9a-z]+)(?:[\?#]|$)/i;
 				var fileExtension = (fileName).match(patternFileExtension);
	 			if($.inArray(fileExtension[0], ['.png', '.jpg', '.jpeg']) >= 0)
				{
          saveProfileImg();
          //update bg

				}

    });
});

//create template JS
function saveProfileImg(){
    fd = new FormData();
    fd.append('file', slImg.files[0]);
    $.ajax({
        url: '<?php echo $pub;?>modules/auth/functions/ajax_profile_upload.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(data)
        {
            if(data == "1")
            {
              var files = $('#slImg')[0].files;
              var reader = new FileReader();
    					reader.addEventListener("load", () => {
                     $("#img_err_box").addClass('d-none');
    					       $("#upload-click").css('background-image', 'url("'+reader.result+'")');
                     $("#menu-avatar").attr('src', reader.result);
    	  			}, false);
    	  			if (files[0]) {
    	    			reader.readAsDataURL(files[0]);
    	  			}
            }
            else {
              $("#img_err_box").removeClass('d-none');
              $("#img_err").html(data);
            }
        }
    });
}
</script>
