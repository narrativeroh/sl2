<?php
session_start();
include '../sl_conf.php';
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
<div class="container">
    <div class="card mb-3">
        <div class="card-body">
            <p>Sort & filters</p>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <p>Game System</p>
            </div>
            <div class="row">
                <h1 class="me-md-2">Event Title</h1>
                <i class="bi bi-eye me-md-2"></i>
                <button type="button" class="btn btn-primary">...</button>
            </div>
            <div class="row">
                <p>Date</p>
                <p>Location</p>
            </div>
            <h3>Sold tickets</h3>
            <div class="row">
                <div class="col-2">
                    <p>Ticket type</p>
                    <h1>XX / XX</h1>
                </div>
                <div class="col-2">
                    <p>Ticket type</p>
                    <h1>XX / XX</h1>
                </div>
                <div class="col-2">
                    <p>Ticket type</p>
                    <h1>XX / XX</h1>
                </div>
                <div class="col">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="button">Promote</button>
                        <button class="btn btn-primary" type="button">Manage</button>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <p>Status bar</p>
                </div>
            </div>
        </div>
    </div>
</div>





<?php
include $doc."core/sl_container_close.php";
include $doc.'core/sl_foot.php';
?>