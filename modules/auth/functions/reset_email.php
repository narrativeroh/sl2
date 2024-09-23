<?php
function resetEmail($email)
{
  global $pdo;
  global $user;

  if(empty($user))
  {
    return "Uh oh! Something went very wrong there. Logout and back in and try again.";
    exit;
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {return "Invalid email address";}

  //update new email field & token
  $reset = getToken(16);

  $sql = "update sl_auth set auth_new_email = ?, auth_reset = ? where auth_id = ?";
  $q = $pdo->prepare($sql);
  $q->execute(array($email, $reset, $user['auth_id']));

  //get user
  $sql = "select * from sl_auth where auth_id = ?";
  $q = $pdo->prepare($sql);
  $q->execute(array($user['auth_id']));
  $r2=$q->fetchAll();
  $outcome = sendEmails(3, $r2);
  return 1;
}

function checkResetEmail($email, $code)
{
  global $pdo;
  global $user;

  //validate email
  $email = strtolower($email);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {return "This isn't right";}

  //validate code
  if(strlen($code)<>16){return "This isn't right";}

  $sql = "select * from sl_auth where auth_reset = ? and auth_new_email = ?";
  $q = $pdo->prepare($sql);
  $q->execute(array($code, $email));
  $r=$q->fetchAll();
  if(empty($r))
  {
    return "This isn't right";
  }

  $sql = "update sl_auth set auth_email = ?, auth_new_email = ? where auth_id = ?";
  $q = $pdo->prepare($sql);
  $q->execute(array($email, "", $r[0]['auth_id']));
  return 1;
}
?>
