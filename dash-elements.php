<?php
session_start();
include 'core/sl_conf.php';
include $doc.'modules/auth/functions/login.php';
$mysession = session_id();
$user = authcheck($mysession);
$menu = "Organiser";
if(!is_array($user))
{
  header('Location: '.$pub.'login/');
}
include $doc.'core/sl_head.php';
include $doc."core/sl_menu.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Event Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-light">
    <div class="mb-3">
    </div>
    <div class="row">
        <!-- Carousel Section -->
        <div class="col-6 mb-3">

            <div id="carouselExampleIndicators" class="carousel slide shadow" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.stockvault.net/data/2010/02/04/113039/preview16.jpg" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.stockvault.net/data/2011/09/25/127092/preview16.jpg" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.stockvault.net/data/2007/03/01/102413/preview16.jpg" class="d-block w-100"
                            alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark shadow mb-3 text-center" style="min-height: 300px">
                <div class="card-body">
                    <h5 class="card-title">My Upcoming Events</h5>
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Date</th>
                                <th scope="col">Name</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><i class="bi bi-dice-5-fill"></i></th>
                                <td>24 Nov 2024</td>
                                <td>Bush Bash</td>
                                <td><button type="button" class="btn btn-grad btn-sm">Go</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Create Tournament Button -->
        <div class="col">
            <div class="card text-center mb-3 shadow">
                <div class="card-body">
                    <h1><i class="bi bi-trophy"></i></h1>
                    <h5 class="card-title">Create a Tournament</h5>
                    <a href="#" class="btn btn-grad">Get Started</a>
                </div>

            </div>
            <div class="card bg-dark shadow" style="min-height: 140px">
                <div class="card-body">
                    <!-- Empty Card for now -->
                </div>
            </div>


        </div>
    </div>

    <!-- Grid Section for Extra Info -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-lg-6 mb-3">
            <div class="card bg-dark shadow h-100">
                <div class="card-body">
                    <h5 class="card-title">My Upcoming Events</h5>
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Date</th>
                                <th scope="col">Name</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><i class="bi bi-dice-5-fill"></i></th>
                                <td>24 Nov 2024</td>
                                <td>Bush Bash</td>
                                <td><button type="button" class="btn btn-grad btn-sm">Go</button></td>
                            </tr>
                            <tr>
                                <th scope="row"><i class="bi bi-dice-5-fill"></i></th>
                                <td>24 Nov 2024</td>
                                <td>Bush Bash</td>
                                <td><button type="button" class="btn btn-grad btn-sm">Go</button></td>
                            </tr>
                            <tr>
                                <th scope="row"><i class="bi bi-dice-5-fill"></i></th>
                                <td>24 Nov 2024</td>
                                <td>Bush Bash</td>
                                <td><button type="button" class="btn btn-grad btn-sm">Go</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-3">
            <div class="card bg-dark shadow h-100">
                <div class="card-body">
                    <!-- Empty Card for now -->
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-3">
            <div class="card bg-dark shadow h-100">
                <div class="card-body">
                    <!-- Empty Card for now -->
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-9 mb-3">
            <div class="card bg-dark shadow">
                <div class="card-body">
                    <h5 class="mb-3">Recent Game Results</h5>
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th scope="col">VS</th>
                                <th scope="col">Factions</th>
                                <th scope="col">Event</th>
                                <th scope="col">Result</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Mark</th>
                                <td>Stormcast Eternals v Beasts of Chaos</td>
                                <td>Bush Bash</td>
                                <td>Win</td>
                                <td><button type="button" class="btn btn-primary btn-sm">View</button></td>
                            </tr>
                            <tr>
                                <th scope="row">Mark</th>
                                <td>Stormcast Eternals v Beasts of Chaos</td>
                                <td>Bush Bash</td>
                                <td>Win</td>
                                <td><button type="button" class="btn btn-primary btn-sm">View</button></td>
                            </tr>
                            <tr>
                                <th scope="row">Mark</th>
                                <td>Stormcast Eternals v Beasts of Chaos</td>
                                <td>Bush Bash</td>
                                <td>Win</td>
                                <td><button type="button" class="btn btn-primary btn-sm">View</button></td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="text-end">See all</p>
                </div>
            </div>
        </div>
        <div class="col-3 mb-3">
            <div class="card bg-dark shadow text-center">
                <div class="card-body">
                    <h5>Card</h5>
                    <p>Some text</p>
                </div>
            </div>
        </div>

    </div>


    <div class="row">
        <div class="col-9 mb-3">
            <div class="card shadow switch-mode-Organiser" style="color:whitesmoke">
                <div class="card-body">
                    <h5 class="mb-3">My Events</h5>

                    <div class="card-header">
                        <ul class="nav nav-pills card-header-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Previous</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Upcoming</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">System</th>
                                    <th scope="col">Location</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">16 Sep 24</th>
                                    <td>Bush Bash</td>
                                    <td>Age of Sigmar</td>
                                    <td>VIC, Australia</td>
                                    <td><button type="button" class="btn btn-primary btn-sm">View</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">16 Sep 24</th>
                                    <td>Bush Bash</td>
                                    <td>Age of Sigmar</td>
                                    <td>VIC, Australia</td>
                                    <td><button type="button" class="btn btn-primary btn-sm">View</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">16 Sep 24</th>
                                    <td>Bush Bash</td>
                                    <td>Age of Sigmar</td>
                                    <td>VIC, Australia</td>
                                    <td><button type="button" class="btn btn-primary btn-sm">View</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="text-end">See all</p>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card h-100 text-center shadow">
                        <div class="card-body">
                            <div class="display-4 text-primary mb-2">
                                <i class="bi bi-people"></i>
                            </div>
                            <h2 class="card-title mb-3">1,234</h2>
                            <p class="card-text text-muted">Active Users</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 text-center shadow">
                        <div class="card-body">
                            <div class="display-4 text-success mb-2">
                                <i class="bi bi-graph-up"></i>
                            </div>
                            <h2 class="card-title mb-3">56%</h2>
                            <p class="card-text text-muted">Growth Rate</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 text-center shadow">
                        <div class="card-body">
                            <div class="display-4 text-warning mb-2">
                                <i class="bi bi-star"></i>
                            </div>
                            <h2 class="card-title mb-3">4.8</h2>
                            <p class="card-text text-muted">Average Rating</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 text-center shadow">
                        <div class="card-body">
                            <div class="display-4 text-danger mb-2">
                                <i class="bi bi-clock-history"></i>
                            </div>
                            <h2 class="card-title mb-3">98.3%</h2>
                            <p class="card-text text-muted">Uptime</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>



<?php
include $doc."core/sl_container_close.php";
include $doc.'core/sl_foot.php';
?>