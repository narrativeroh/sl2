<?php
session_start();
include 'core/sl_conf.php';
include $doc.'modules/auth/functions/login.php';
$mysession = session_id();
$user = authcheck($mysession);
$menu = "Player";
if(!is_array($user))
{
  header('Location: '.$pub.'login/');
}
include $doc.'core/sl_head.php';
include $doc."core/sl_menu.php";

?>

<!--Top banner-->
<div style="background: white">
    <div class="container">
        <div class="row">
            <div class="col" style="background: red">
                Text
            </div>
            <div class="col" style="background: green">
                Blank
            </div>
            <div class="col" style="background: blue">
                Buttons
            </div>
        </div>
        <!--Progress Indicator-->
        <div>

        </div>
    </div>


</div>



<?php
include $doc."core/sl_container_close.php";
include $doc.'core/sl_foot.php';
?>
