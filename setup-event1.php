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
<div>
    <div class="container large-banner">
        <div class="row mb-3">
            <div class="col">
                <h1>NEW TOURNAMENT</h1>
                <h3>1: SETTINGS</h3>
                <p>This is where you define the primary settings for your tournament. Dont worry, no one can see your
                    tournament until you publish it.We strongly recommend our PRESET options for an easy way to get the
                    basics of your tournament setup.</p>
            </div>
            <div class="col" style="background: green">
                Blank
            </div>
            <div class="col" style="background: yellow">
                <h1></h1>
                <h3>2: REGISTRATION</h3>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2" type="button">PREVIEW</button>
                    <button class="btn btn-primary" type="button">PUBLISH & NEXT</button>
                </div>
            </div>
        </div>
        <!--Progress Indicator-->
        <div style="background: white">
            This is the progress indicator...
        </div>
    </div>
</div>

<!-- Form section -->
<div class="container">
    <div class="row">

        <!-- Scrollspy menu Column 1 -->
        <div class="col-2">
            <div class="card">
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="#list-item-1">Presets</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Item 5</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Item 6</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Item 7</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Item 8</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Item 9</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Item 10</a>
                </div>
            </div>
        </div>

        <!-- Form fields Column 2 -->
        <div class="col">
            <div style="height: 100px">
                Action Bar
                <button type="button" class="btn btn-primary">Primary</button>
            </div>
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example"
                tabindex="0">
                <div class="card text-white bg-dark mb-3">
                    <div class="card-header" id="list-item-1">Presets</div>
                    <div class="card-body">
                        <h5 class="card-title">Dark card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown button
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4 id="list-item-2">Item 2</h4>
                <p>...</p>
                <h4 id="list-item-3">Item 3</h4>
                <p>...</p>
                <h4 id="list-item-4">Item 4</h4>
                <p>...</p>
                <h4 id="list-item-4">Item 5</h4>
                <p>...</p>
                <h4 id="list-item-4">Item 6</h4>
                <p>...</p>
                <h4 id="list-item-4">Item 7</h4>
                <p>...</p>
                <h4 id="list-item-4">Item 8</h4>
                <p>...</p>
                <h4 id="list-item-4">Item 9</h4>
                <p>...</p>
                <h4 id="list-item-4">Item 10</h4>
                <p>...</p>
            </div>
        </div>


    </div>
</div>
<?php
include $doc."core/sl_container_close.php";
include $doc.'core/sl_foot.php';
?>