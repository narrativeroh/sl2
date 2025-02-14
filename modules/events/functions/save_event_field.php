<?php
session_start();
include '../../../../sl_conf.php';
include $doc.'modules/auth/functions/login.php';
$mysession = session_id();
$user = authcheck($mysession);
//check user
$err = "";
if(!is_array($user))
{
  echo "Error: unable to save";
  exit();
}

//Check form submit
if(empty($_POST['event']) || $_POST['event']=="")
{
  echo "Error: unable to save";
  exit();
}
include $doc."modules/events/functions/events.php";

//get event
$event = getEvent($_POST['event']);
if(empty($event))
{
  echo "Error: unable to save";
  exit();
}

//event_name
if($_POST['field']=="event_name")
{
  //validate input
  $value = strip_tags($_POST['value']);
  $value = substr($value, 0, 50);
  if($value <>"")
  {
    $sql = "update sl_events set event_name = ? where event_id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($value, $event['event_id']));
    echo "Event name updated";
    exit();
  }
  else
  {
    echo "Error: Event name cannot be empty";
    exit();
  }
}
?>
