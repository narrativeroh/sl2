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

    <div class="row mb-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    CTA
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    CTA
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    CTA
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    CTA
                </div>
            </div>
        </div>
    </div>
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
                <div class="col-auto">
                    <h1>Event Title</h1>
                </div>
                <div class="col-auto">
                    <button type="button" class="btn btn-primary">...</button>
                </div>
            </div>
            <div class="row">
                <div class="col-auto">
                    <p>Date</p>
                </div>
                <div class="col-auto">
                    <p>Location</p>
                </div>
            </div>
            <h4>Sold tickets</h4>
            <div class="row  mb-3">
                <div class="col-auto">
                    <p>Ticket type</p>
                    <h2>XX / XX</h2>
                </div>
                <div class="col-auto">
                    <p>Ticket type</p>
                    <h2>XX / XX</h2>
                </div>
                <div class="col-auto">
                    <p>Ticket type</p>
                    <h2>XX / XX</h2>
                </div>
                <div class="col align-self-end">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="button">Promote</button>
                        <button class="btn btn-primary" type="button">Manage</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    Status bar
                </div>
            </div>
        </div>
    </div>
</div>





<?php
include $doc."core/sl_container_close.php";
include $doc.'core/sl_foot.php';
?>