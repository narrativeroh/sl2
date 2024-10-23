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

<!--Top banner-->
<div>
    <div class="container large-banner mb-3">
        <div class="row mb-3">
            <div class="col ">
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
                    <a class="list-group-item list-group-item-action" href="#list-item-2">Tournament Info</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-5">Item 5</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-6">Item 6</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-7">Item 7</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-8">Item 8</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-9">Item 9</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-10">Item 10</a>
                </div>
            </div>
        </div>

        <!-- Form fields Column 2 -->
        <!-- Action Bar Card -->
        <div class="col">
            <div style="height: 100px">
                Action Bar
                <button type="button" class="btn btn-primary">Add/Edit TO</button>
            </div>
            <!-- Presets Card -->
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
                <!-- Premium Banner -->
                <div class="container large-banner pt-3 pb-3 mb-3">
                    <div class="row align-items-end">
                        <div class="col">
                            <h4>GO PREMIUM</h4>
                            <p>Take your tournament to the next level! Unlock the full Stats & Ladders tournament
                                features
                                with 1 simple payment.</p>
                        </div>
                        <div class="col"></div>
                        <div class="col d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type=" button" class="btn btn-dark me-md-2">Learn more</button>
                            <button type="button" class="btn btn-grad">Go premium</button>
                        </div>
                    </div>
                </div>
                <!-- Tournament Info Card -->
                <div class="card text-white bg-dark mb-3">
                    <div class="card-header" id="list-item-2">Tournament Info</div>
                    <div class="card-body">
                        <!-- Tournament Info Form Column 1 -->
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="">
                                    <label for="floatingInput">Tournament name</label>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="dd/mm/yy">
                                            <label for="floatingInput">Start date</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="dd/mm/yy">
                                            <label for="floatingInput">Finish date</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="">
                                    <label for="floatingInput">Location</label>
                                </div>
                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Private Event <p>
                                            <small>Not
                                                available for public registration</small>
                                        </p></label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Summary (Short description)</label>
                                </div>
                                <select class="form-select mb-3" aria-label="Tournament Format">
                                    <option selected>Select tournament format</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <select class="form-select mb-3" aria-label="Pairing Method">
                                    <option selected>Select pairing method</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="">
                                    <label for="floatingInput">Number of rounds</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="">
                                    <label for="floatingInput">Round time limit</label>
                                </div>
                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Blood Rule (Avoid
                                        matching players from the same club in round 1 where possible)</label>
                                </div>
                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Grudge Matches (Allow
                                        players to nominate and accept/reject round 1 opponent challenges)</label>
                                </div>
                            </div>
                            <!-- Tournament Info Form Column 2 -->
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="">
                                    <label for="floatingInput">Placeholder upload field</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="" id="floatingTextarea2"
                                        style="height: 300px"></textarea>
                                    <label for="floatingTextarea2">Long Description</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Game System Card -->
                <h4 id="list-item-3">Item 3</h4>
                <p>...</p>
                <!-- Game System Card Column 1 -->

                <!-- Game System Card Column 2 -->

                <!-- Tickets Card -->
                <h4 id="list-item-4">Item 4</h4>
                <p>...</p>


                <h4 id="list-item-5">Item 5</h4>
                <p>...</p>
                <h4 id="list-item-6">Item 6</h4>
                <p>...</p>
                <h4 id="list-item-7">Item 7</h4>
                <p>...</p>
                <h4 id="list-item-8">Item 8</h4>
                <p>...</p>
                <h4 id="list-item-9">Item 9</h4>
                <p>...</p>
                <h4 id="list-item-10">Item 10</h4>
                <p>...</p>
            </div>
        </div>


    </div>
</div>
<?php
include $doc."core/sl_container_close.php";
include $doc.'core/sl_foot.php';
?>