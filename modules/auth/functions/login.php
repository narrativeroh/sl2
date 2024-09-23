<?php
function authlogin($mysession, $email, $pass)
{
  global $pdo;

  //validate email
  $email = strtolower($email);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {return "Invalid email address";}

  //get temp password and reset token
  $key = hashIt(array('str'=>$pass));

  //check login
  $sql = "select * from sl_auth where auth_email = ? and auth_key = ? and auth_status <> ?";
  $q = $pdo->prepare($sql);
  $q->execute(array($email, $key, 0));
  $r=$q->fetchAll();
  if(!empty($r))
  {
    $str1 = $email."|".$key."|".$mysession;
    $_SESSION['slauth']=$str1;
    setcookie('slauth',$str1, time()+60*60*24*90, "/");
    return 1;
  }
  return "Incorrect username or password combination";

}

function authcheck($mysession)
{
  global $pdo;
  //check user
  $user = "test";
  if(isset($_SESSION['slauth'])){if($_SESSION['slauth']<>""){$str = $_SESSION['slauth'];}}
  if(isset($_COOKIE['slauth'])){if($_COOKIE['slauth']<>"" && !isset($str)){$str = $_COOKIE['slauth'];}}
  if(isset($str))
  {
    $auth = explode("|", $str);
    if($mysession == $auth[2])
    {
      $sql = "select * from sl_auth where auth_email = ? and auth_key = ?";
      $q = $pdo->prepare($sql);
      $q->execute(array($auth[0], $auth[1]));
      $r=$q->fetchAll();
      if(!empty($r)){$user = $r[0];}
    }
    else {
      $user = $auth[2]."!=".$mysession;
    }
  }
  return $user;
}
function authlogout()
{
  //kill sessions/cookies
  session_destroy();
  setcookie("slauth", "", time()-10, "/");

  //return result
  return 1;
}
?>
