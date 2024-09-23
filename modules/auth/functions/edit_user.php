<?php
function editUser($displayname, $fname, $lname, $region, $dob, $bio)
{
  global $pdo;
  global $user;
  //check data
  //displayname
  if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $displayname) || strlen($displayname) > 15 || strlen($displayname) < 3){return "Your display name should not contain any special characters, and should be between 3 and 15 characters long (including spaces)";}
  //fname
  if(preg_match('/[\^£$%&*()}{@#~?><>,|=_+¬]/', $fname) || strlen($fname) > 15 || strlen($fname) < 1){return "Your first name should not contain any special characters (hyphens and apostrophes are ok), and should be between 2 and 15 characters long (including spaces)";}
  //lname
  if(preg_match('/[\^£$%&*()}{@#~?><>,|=_+¬]/', $lname) || strlen($lname) > 15 || strlen($lname) < 1){return "Your last name should not contain any special characters (hyphens and apostrophes are ok), and should be between 2 and 15 characters long (including spaces)";}
  //regionid
  $sql = "select geoloc_id from sl_geoloc where geoloc_id = ?";
  $q = $pdo->prepare($sql);
  $q->execute(array($region));
  $r=$q->fetchAll();
  if(empty($r)){return "Please select your region/country";}

  //dob
  if (($timestamp = strtotime($dob)) === false) {return "That is not a date. I call shenanigans!";}

  //clean bio
  $bio = strip_tags($bio);

  //update user
  $sql = "update sl_auth set auth_name = ?, auth_fname = ?, auth_lname = ?, auth_region = ?, auth_dob = ?, auth_bio = ? where auth_id = ?";
  $q = $pdo->prepare($sql);
  $q->execute(array($displayname, $fname,  $lname, $region, $dob, $bio, $user['auth_id']));
  return 1;
}
?>
