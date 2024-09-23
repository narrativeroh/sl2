<?php
function registerUser($email, $name, $region, $gamesystems, $terms)
{

  global $pdo;

  //validate email
  $email = strtolower($email);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {return "Invalid email address";}
  $sql = "select auth_email from sl_auth where auth_email = ?";
  $q = $pdo->prepare($sql);
  $q->execute(array($email));
  $r=$q->fetchAll();
  if(!empty($r)){return "This email is already linked to an account. <a href=\"/login/\">login</a>.";}

  //validate name
  if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $name) || strlen($name) > 15 || strlen($name) < 3){return "Your name should not contain any special characters, and should be between 3 and 15 characters long (including spaces)";}

  //validate geoloc
  if($region==0 || !is_numeric($region)){return "Please select your region/country";}
  $sql = "select geoloc_id from sl_geoloc where geoloc_id = ?";
  $q = $pdo->prepare($sql);
  $q->execute(array($region));
  $r=$q->fetchAll();
  if(empty($r)){return "Please select your region/country";}

  //validate game systems
  if(!is_array($gamesystems)){ return "Please select at least 1 game system you play";}

  //validate Terms
  if($terms<>1){return "Please agree to the Stats & Ladders Terms of Use and Privacy Policy";}

  //get a unique handle
  $tmp = str_replace(' ', '', $name);
  $tmp = strtolower($tmp);
  $rando = 0;
  $handle = "";
  while($handle == "")
  {
    $checkstr = $tmp;
    if($rando > 0){$checkstr .= getRandomNumber($rando);}
    $sql = "select auth_handle from sl_auth where auth_handle = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($tmp));
    $r=$q->fetchAll();
    if(empty($r)){$handle = $checkstr;}
    $rando++;
  }
  //get temp password and reset token
  $key = hashIt(array('str'=>getToken(12)));
  $reset = getToken(16);
  //create user
  $sql = "insert into sl_auth (auth_email, auth_name, auth_handle, auth_key, auth_reset, auth_status) values (?,?,?,?,?,?)";
  $q = $pdo->prepare($sql);
  $q->execute(array($email, $name, $handle, $key, $reset, 1));

  $sql = "select * from sl_auth where auth_email = ?";
  $q = $pdo->prepare($sql);
  $q->execute(array($email));
  $r=$q->fetchAll();

  //assign game systems!

  //email activation code
  $outcome = sendEmails(1, $r);
  return 1;
  //return success
}
?>
