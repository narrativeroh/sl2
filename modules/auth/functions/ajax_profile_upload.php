<?php
session_start();
include '../../../../sl_conf.php';
include $doc.'modules/auth/functions/login.php';
$mysession = session_id();
$user = authcheck($mysession);

//file
$message = "";
if(empty($_FILES['file'])){$message.="Upload an image to use for this template";}
$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
$ext = strtolower($ext);
if(!in_array($ext, array("png","jpg","jpeg"))){$message.="We only do JPG and PNG images";}
//file size
$size = $_FILES['file']['size'];
if($size > 1024000){$message.="that is more than 1MB!";}
if($message <> "")
{
  echo $message;
  exit();
}

//save
$filename = md5($user['user_id'].time()).".".$ext;
$location = $doc."uploads/".$user['auth_id']."/";
if (!is_dir($location)){mkdir($location, 0700);}
/* Upload file */
if(move_uploaded_file($_FILES['file']['tmp_name'],$location.$filename))
{
    $sql = "update sl_auth set auth_img = ? where auth_id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($filename, $user['auth_id']));
    echo 1;
}
else
{
  echo "Well that didn't go as expected! Maybe try again?";
}
?>
