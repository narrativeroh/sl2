<?php
function requestPwd($email)
{
  global $pdo;
  //validate email
  $email = strtolower($email);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {return "Invalid email address";}
  $sql = "select auth_id from sl_auth where auth_email = ?";
  $q = $pdo->prepare($sql);
  $q->execute(array($email));
  $r=$q->fetchAll();
  if(!empty($r))
  {
    //set auth_reset token
    $reset = getToken(16);
    $sql = "update sl_auth set auth_reset = ? where auth_id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($reset, $r[0]['auth_id']));

    //get user
    $sql = "select * from sl_auth where auth_id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($r[0]['auth_id']));
    $r2=$q->fetchAll();
    $outcome = sendEmails(2, $r2);
  }
  return 1;
}

function checkResetCode($email, $code)
{
  global $pdo;

  //validate email
  $email = strtolower($email);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {return "This isn't right";}

  //validate code
  if(strlen($code)<>16){return "This isn't right";}

  $sql = "select * from sl_auth where auth_reset = ? and auth_email = ?";
  $q = $pdo->prepare($sql);
  $q->execute(array($code, $email));
  $r=$q->fetchAll();
  if(empty($r))
  {
    return "This isn't right";
  }
  return 1;
}


function resetPwd($email, $pwd, $confirm)
{
    global $pdo;
  //validate pwd
  if(strlen($pwd)<5){return "Please make your password at least 5 characters!";}
  if($pwd <> $confirm){return "Your passwords don't match.";}

  $newpwd = hashIt(array('str'=>$pwd));
  $sql = "update sl_auth set auth_key = ?, auth_reset = ? where auth_email = ?";
  $q = $pdo->prepare($sql);
  $q->execute(array($newpwd, '', $email));
  return 1;
}
?>
