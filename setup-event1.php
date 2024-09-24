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
        <div class="row mb-3">
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