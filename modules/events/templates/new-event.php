<?php
session_start();
include '../../../../sl_conf.php';
include $doc.'modules/auth/functions/login.php';
$mysession = session_id();
$user = authcheck($mysession);
include $doc."modules/events/functions/create_event.php";
$result = createEvent();
if($result <> "")
{
  echo $result;
  exit;
}
echo "err";
?>
