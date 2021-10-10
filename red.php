<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports cars test</title>

    //for navbar//
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    //for ajax//
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    //for font//
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">

    // for the cards//
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <script>
        $(document).ready(function() {
            $(".hidd").hide();
            $("#hide").click(function() {
                $(".hidd").slideUp();
            });

            $("#show").click(function() {

                $(".hidd").slideDown();
            });
        });

        $(document).ready(function() {
            $(".hidd1").hide();
            $("#hide1").click(function() {
                $(".hidd1").slideUp();
            });
            $("#show1").click(function() {
                $(".hidd1").slideDown();
            });
        });
        $(document).ready(function() {
            $("#hide2").click(function() {
                $(".hidd2").hide();
            });
            $("#show2").click(function() {
                $(".hidd2").show();
            });
        });
        $(document).ready(function() {
            $("#hide3").click(function() {
                $(".hidd3").hide();
            });
            $("#show3").click(function() {
                $(".hidd3").show();
            });
        });
        $(document).ready(function() {
            $("#hide4").click(function() {
                $(".hidd4").hide();
            });
            $("#show4").click(function() {
                $(".hidd4").show();
            });
        });
        $(document).ready(function() {
            $("#hide5").click(function() {
                $(".hidd5").hide();
            });
            $("#show5").click(function() {
                $(".hidd5").show();
            });
        });
        $(document).ready(function() {
            $("#hide6").click(function() {
                $(".hidd6").hide();
            });
            $("#show6").click(function() {
                $(".hidd6").show();
            });
        });

        $(document).ready(function() {
            $("#hide7").click(function() {
                $(".hidd7").hide();
            });
            $("#show7").click(function() {
                $(".hidd7").show();
            });
        });

        $(document).ready(function() {
            $("#hide8").click(function() {
                $(".hidd8").hide();
            });
            $("#show8").click(function() {
                $(".hidd8").show();
            });
        });

        $(document).ready(function() {
            $("#hide9").click(function() {
                $(".hidd9").hide();
            });
            $("#show9").click(function() {
                $(".hidd9").show();
            });
        });


        $(document).ready(function() {
            $("#hide10").click(function() {
                $(".hidd10").hide();
            });
            $("#show10").click(function() {
                $(".hidd10").show();
            });
        });
        $(document).ready(function() {
            $("#hide11").click(function() {
                $(".hidd11").hide();
            });
            $("#show11").click(function() {
                $(".hidd11").show();
            });
        });
        $(document).ready(function() {
            $("#hide12").click(function() {
                $(".hidd12").hide();
            });
            $("#show12").click(function() {
                $(".hidd12").show();
            });
        });
        $(document).ready(function() {
            $("#hide13").click(function() {
                $(".hidd13").hide();
            });
            $("#show13").click(function() {
                $(".hidd13").show();
            });
        });
        $(document).ready(function() {
            $("#hide14").click(function() {
                $(".hidd14").hide();
            });
            $("#show14").click(function() {
                $(".hidd14").show();
            });
        });

        $(document).ready(function() {
            $("#hide15").click(function() {
                $(".hidd15").hide();
            });
            $("#show15").click(function() {
                $(".hidd15").show();
            });
        });
    </script>


    <style>
        * {
            font-family: 'Baloo Bhai 2', cursive;
        }


        .sss {
            text-align: center;
        }

        .Checkout {
            display: flex;
            cursor: pointer;
            justify-content: center;
            align-items: center;
            margin-left: 120px;
            text-decoration: none;
            border-radius: 30px;
            margin-top: 70px;
            padding-left: 10px
        }



        .tablebody {
            font-family: "Georgia", Times, serif;
            font-size: x-large;
        }
    </style>




</head>

<body>

    <?php

    $conn = mysqli_connect('localhost', 'root', '', 'project_1', 3307);

    if (!$conn) {
        die("The connection was not succesfull" . mysqli_connect_error());
        echo "<br>";
    }
    ?>





    <nav class="navbar fixed-top navbar-expand-lg" style="background-color:rgb(246, 96, 96);">
        <!-- <nav class="navbar navbar-light" style="background-color:#e3f2fd;"> -->
        <div class="container-fluid">
            <a class="navbar-brand" href="new.html">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Newest Arivals</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="categories.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="sports.php">Sports cars</a></li>
                            <li><a class="dropdown-item" href="luxory.php">Luxory cars</a></li>
                            <li><a class="dropdown-item" href="Hatchbacks.php">Hatchbacks</a></li>
                            <li><a class="dropdown-item" href="JDM.php">JDM</a></li>
                            <li><a class="dropdown-item" href="sedans.php">Sedans</a></li>
                            <li><a class="dropdown-item" href="SUV.php">SUV</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="new.html">Home</a></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <section class="my-5">
        <div class="py-5">
            <div class="sss">
                <h1> <span class="badge bg-secondary">Sports Cars</span></h1>
            </div>
        </div>

        <div class="containerfluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Sports/Aventador SVJ.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Aventador SVJ </h4>
                            <p class="card-text">Lamborghini</p>

                            <button id="hide" class="btn btn-primary">Hide details</button>
                            <button id="show" class="btn btn-primary">Show details</button>



                            <div class="hidd">





                                <hr>

                                <?php



                                $sql = "SELECT * FROM `sports` WHERE `Model` = 'Aventador SVJ'";
                                $res = mysqli_query($conn, $sql);

                                while ($roww = mysqli_fetch_assoc($res)) {

                                    echo   "Model:" . $roww["Model"] . "<br>";
                                    echo   "Make:" . $roww["Make"] . "<br>";
                                    echo   "Engine:" . $roww["Engine"], "<br>";
                                    echo   "Horsepower:" . $roww["Horsepower"] . "<br>";
                                    echo   "Price:" . $roww["Price"] . "<br>";
                                }




                                ?>
                            </div>




                        </div>
                    </div>
                </div>




                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Luxory/RR Evoque.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Range Rover Evoque</h4>
                            <p class="card-text">Range Rover</p>


                            <button id="hide1" class="btn btn-primary">Hide details </button>
                            <button id="show1" class="btn btn-primary">Show details</button>


                            <div class="hidd1">


                                <hr>
                                <?php



                                $sql = "SELECT * FROM `luxory` WHERE `Model` = 'Range Rover Evoque'";
                                $res = mysqli_query($conn, $sql);

                                while ($roww = mysqli_fetch_assoc($res)) {


                                    echo  "Model:" . $roww["Model"] . "<br>";
                                    echo  "Make:" . $roww["Make"] . "<br>";
                                    echo  "Engine:" . $roww["Engine"] . "<br>";
                                    echo  "Horsepower:" . $roww["Horsepower"] . "<br>";
                                    echo  "Price:" . $roww["Price"] . "<br>";
                                }

                                echo "</tbody>";
                                echo "</table>";
                                // }


                                ?>
                            </div>
                        </div>
                    </div>



                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Luxory/RR phantom.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Rolls-Royce Phantom </h4>
                            <p class="card-text">Rolls-Royce</p>


                            <button id="hide2" class="btn btn-primary">Hide details</button>
                            <button id="show2" class="btn btn-primary">Show details</button>


                            <table class="hidd2">

                                <thead>
                                    <tr>

                                    </tr>
                                </thead>
                                <tbody>
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `luxory` WHERE `Model` = 'Rolls-Royce Phantom'";
                                    $res = mysqli_query($conn, $sql);

                                    while ($roww = mysqli_fetch_assoc($res)) {


                                        echo  "<tr><td>" . "Model:" . $roww["Model"] . "</td></tr>";
                                        echo  "<tr><td>" . "Make:" . $roww["Make"] . "</td></tr>";
                                        echo  "<tr><td>" . "Engine:" . $roww["Engine"] . "</td></tr>";
                                        echo  "<tr><td>" . "Horsepower:" . $roww["Horsepower"] . "</td></tr>";
                                        echo  "<tr><td>" . "Price:" . $roww["Price"] . "</td></tr>";
                                    }

                                    echo "</tbody>";
                                    echo "</table>";
                                    // }


                                    ?>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>


                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Luxory/bently continental GT.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Continental GT</h4>
                            <p class="card-text">Bently</p>

                            <button id="hide3" class="btn btn-primary">Hide details</button>
                            <button id="show3" class="btn btn-primary">Show details</button>


                            <table class="hidd3">

                                <thead>
                                    <tr>

                                    </tr>
                                </thead>
                                <tbody>
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `luxory` WHERE `Model` = ' Continental GT'";
                                    $res = mysqli_query($conn, $sql);

                                    while ($roww = mysqli_fetch_assoc($res)) {


                                        echo  "<tr><td>" . "Model:" . $roww["Model"] . "</td></tr>";
                                        echo  "<tr><td>" . "Make:" . $roww["Make"] . "</td></tr>";
                                        echo  "<tr><td>" . "Engine:" . $roww["Engine"] . "</td></tr>";
                                        echo  "<tr><td>" . "Horsepower:" . $roww["Horsepower"] . "</td></tr>";
                                        echo  "<tr><td>" . "Price:" . $roww["Price"] . "</td></tr>";
                                    }

                                    echo "</tbody>";
                                    echo "</table>";
                                    // }


                                    ?>
                        </div>
                    </div>



                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Luxory/Audi A8.png" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">A8</h4>
                            <p class="card-text">Audi</p>

                            <button id="hide4" class="btn btn-primary">Hide details</button>
                            <button id="show4" class="btn btn-primary">Show details</button>


                            <table class="hidd4">

                                <thead>
                                    <tr>

                                    </tr>
                                </thead>
                                <tbody>
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `luxory` WHERE `Model` = 'Audi A8'";
                                    $res = mysqli_query($conn, $sql);

                                    while ($roww = mysqli_fetch_assoc($res)) {


                                        echo  "<tr><td>" . "Model:" . $roww["Model"] . "</td></tr>";
                                        echo  "<tr><td>" . "Make:" . $roww["Make"] . "</td></tr>";
                                        echo  "<tr><td>" . "Engine:" . $roww["Engine"] . "</td></tr>";
                                        echo  "<tr><td>" . "Horsepower:" . $roww["Horsepower"] . "</td></tr>";
                                        echo  "<tr><td>" . "Price:" . $roww["Price"] . "</td></tr>";
                                    }

                                    echo "</tbody>";
                                    echo "</table>";
                                    // }


                                    ?>
                        </div>
                    </div>



                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Luxory/BMW 7 series.jpg" alt="Card image" width="300px" height="300px">
                        <div class="card-body">
                            <h4 class="card-title">BMW 7 Series</h4>
                            <p class="card-text">BMW</p>

                            <button id="hide5" class="btn btn-primary">Hide details</button>
                            <button id="show5" class="btn btn-primary">Show details</button>


                            <table class="hidd5">

                                <thead>
                                    <tr>

                                    </tr>
                                </thead>
                                <tbody>
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `luxory` WHERE `Model` = 'BMW 7 Series'";
                                    $res = mysqli_query($conn, $sql);

                                    while ($roww = mysqli_fetch_assoc($res)) {


                                        echo  "<tr><td>" . "Model:" . $roww["Model"] . "</td></tr>";
                                        echo  "<tr><td>" . "Make:" . $roww["Make"] . "</td></tr>";
                                        echo  "<tr><td>" . "Engine:" . $roww["Engine"] . "</td></tr>";
                                        echo  "<tr><td>" . "Horsepower:" . $roww["Horsepower"] . "</td></tr>";
                                        echo  "<tr><td>" . "Price:" . $roww["Price"] . "</td></tr>";
                                    }

                                    echo "</tbody>";
                                    echo "</table>";
                                    // }


                                    ?>
                        </div>
                    </div>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                </div>



                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Luxory/rollsroyce wraith.jpg" alt="Card image" width="300px" height="250px">
                        <div class="card-body">
                            <h4 class="card-title">Rolls-Royce Wraith</h4>
                            <p class="card-text">Rolls-Royce</p>

                            <button id="hide6" class="btn btn-primary">Hide details</button>
                            <button id="show6" class="btn btn-primary">Show details</button>


                            <table class="hidd6">

                                <thead>
                                    <tr>

                                    </tr>
                                </thead>
                                <tbody>
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `luxory` WHERE `Model` = 'Rolls-Royce Wraith'";
                                    $res = mysqli_query($conn, $sql);

                                    while ($roww = mysqli_fetch_assoc($res)) {


                                        echo  "<tr><td>" . "Model:" . $roww["Model"] . "</td></tr>";
                                        echo  "<tr><td>" . "Make:" . $roww["Make"] . "</td></tr>";
                                        echo  "<tr><td>" . "Engine:" . $roww["Engine"] . "</td></tr>";
                                        echo  "<tr><td>" . "Horsepower:" . $roww["Horsepower"] . "</td></tr>";
                                        echo  "<tr><td>" . "Price:" . $roww["Price"] . "</td></tr>";
                                    }

                                    echo "</tbody>";
                                    echo "</table>";
                                    // }


                                    ?>
                        </div>
                    </div>



                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Luxory/Bently bentagaya.jpg" alt="Card image" width="300px" height="250px">
                        <div class="card-body">
                            <h4 class="card-title">Bentagaya</h4>
                            <p class="card-text">Bently</p>

                            <button id="hide7" class="btn btn-primary">Hide details</button>
                            <button id="show7" class="btn btn-primary">Show details</button>


                            <table class="hidd7">

                                <thead>
                                    <tr>

                                    </tr>
                                </thead>
                                <tbody>
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `luxory` WHERE `Model` = 'Bentley Bentayga'";
                                    $res = mysqli_query($conn, $sql);

                                    while ($roww = mysqli_fetch_assoc($res)) {


                                        echo  "<tr><td>" . "Model:" . $roww["Model"] . "</td></tr>";
                                        echo  "<tr><td>" . "Make:" . $roww["Make"] . "</td></tr>";
                                        echo  "<tr><td>" . "Engine:" . $roww["Engine"] . "</td></tr>";
                                        echo  "<tr><td>" . "Horsepower:" . $roww["Horsepower"] . "</td></tr>";
                                        echo  "<tr><td>" . "Price:" . $roww["Price"] . "</td></tr>";
                                    }

                                    echo "</tbody>";
                                    echo "</table>";
                                    // }


                                    ?>
                        </div>
                    </div>



                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Luxory/porsche panamera.jpg" alt="Card image" width="300px" height="300px">
                        <div class="card-body">
                            <h4 class="card-title">Panamera</h4>
                            <p class="card-text">Porsche</p>


                            <button id="hide8" class="btn btn-primary">Hide details</button>
                            <button id="show8" class="btn btn-primary">Show details</button>


                            <table class="hidd8">

                                <thead>
                                    <tr>

                                    </tr>
                                </thead>
                                <tbody>
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `luxory` WHERE `Model` = 'Porsche Panamera'";
                                    $res = mysqli_query($conn, $sql);

                                    while ($roww = mysqli_fetch_assoc($res)) {


                                        echo  "<tr><td>" . "Model:" . $roww["Model"] . "</td></tr>";
                                        echo  "<tr><td>" . "Make:" . $roww["Make"] . "</td></tr>";
                                        echo  "<tr><td>" . "Engine:" . $roww["Engine"] . "</td></tr>";
                                        echo  "<tr><td>" . "Horsepower:" . $roww["Horsepower"] . "</td></tr>";
                                        echo  "<tr><td>" . "Price:" . $roww["Price"] . "</td></tr>";
                                    }

                                    echo "</tbody>";
                                    echo "</table>";
                                    // }


                                    ?>
                        </div>
                    </div>


                    <br>
                    <br>
                    <br>
                    <br>

                </div>




                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Luxory/Jaguar XJ7.webp" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">XJ7</h4>
                            <p class="card-text">Jaguar</p>


                            <button id="hide9" class="btn btn-primary">Hide details</button>
                            <button id="show9" class="btn btn-primary">Show details</button>


                            <table class="hidd9">

                                <thead>
                                    <tr>

                                    </tr>
                                </thead>
                                <tbody>
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `luxory` WHERE `Model` = 'Jaguar XJ'";
                                    $res = mysqli_query($conn, $sql);

                                    while ($roww = mysqli_fetch_assoc($res)) {


                                        echo  "<tr><td>" . "Model:" . $roww["Model"] . "</td></tr>";
                                        echo  "<tr><td>" . "Make:" . $roww["Make"] . "</td></tr>";
                                        echo  "<tr><td>" . "Engine:" . $roww["Engine"] . "</td></tr>";
                                        echo  "<tr><td>" . "Horsepower:" . $roww["Horsepower"] . "</td></tr>";
                                        echo  "<tr><td>" . "Price:" . $roww["Price"] . "</td></tr>";
                                    }

                                    echo "</tbody>";
                                    echo "</table>";
                                    // }


                                    ?>
                        </div>
                    </div>



                </div>


                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Luxory/Merc S-class.jpeg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Mercedes-Benz S-Class</h4>
                            <p class="card-text">Mercedes-Benz</p>

                            <button id="hide10" class="btn btn-primary">Hide details</button>
                            <button id="show10" class="btn btn-primary">Show details</button>


                            <table class="hidd10">

                                <thead>
                                    <tr>

                                    </tr>
                                </thead>
                                <tbody>
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `luxory` WHERE `Model` = 'Mercedes-Benz S-Class'";
                                    $res = mysqli_query($conn, $sql);

                                    while ($roww = mysqli_fetch_assoc($res)) {



                                        echo  "<tr><td>" . "Model:" . $roww["Model"] . "</td></tr>";
                                        echo  "<tr><td>" . "Make:" . $roww["Make"] . "</td></tr>";
                                        echo  "<tr><td>" . "Engine:" . $roww["Engine"] . "</td></tr>";
                                        echo  "<tr><td>" . "Horsepower:" . $roww["Horsepower"] . "</td></tr>";
                                        echo  "<tr><td>" . "Price:" . $roww["Price"] . "</td></tr>";
                                    }

                                    echo "</tbody>";
                                    echo "</table>";
                                    // }


                                    ?>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Luxory/Merc S-class.jpeg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Mercedes-Benz S-Class</h4>
                            <p class="card-text">Mercedes-Benz</p>

                            <button id="hide11" class="btn btn-primary">Hide details</button>
                            <button id="show11" class="btn btn-primary">Show details</button>


                            <table class="hidd11">

                                <thead>
                                    <tr>

                                    </tr>
                                </thead>
                                <tbody>
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `luxory` WHERE `Model` = 'Mercedes-Benz S-Class'";
                                    $res = mysqli_query($conn, $sql);

                                    while ($roww = mysqli_fetch_assoc($res)) {


                                        echo  "<tr><td>" . "Model:" . $roww["Model"] . "</td></tr>";
                                        echo  "<tr><td>" . "Make:" . $roww["Make"] . "</td></tr>";
                                        echo  "<tr><td>" . "Engine:" . $roww["Engine"] . "</td></tr>";
                                        echo  "<tr><td>" . "Horsepower:" . $roww["Horsepower"] . "</td></tr>";
                                        echo  "<tr><td>" . "Price:" . $roww["Price"] . "</td></tr>";
                                    }

                                    echo "</tbody>";
                                    echo "</table>";
                                    // }


                                    ?>

                        </div>
                    </div>
                </div>

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Luxory/Merc S-class.jpeg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Mercedes-Benz S-Class</h4>
                            <p class="card-text">Mercedes-Benz</p>

                            <button id="hide12" class="btn btn-primary">Hide details</button>
                            <button id="show12" class="btn btn-primary">Show details</button>


                            <table class="hidd12">

                                <thead>
                                    <tr>

                                    </tr>
                                </thead>
                                <tbody>
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `luxory` WHERE `Model` = 'Mercedes-Benz S-Class'";
                                    $res = mysqli_query($conn, $sql);

                                    while ($roww = mysqli_fetch_assoc($res)) {


                                        echo  "<tr><td>" . "Model:" . $roww["Model"] . "</td></tr>";
                                        echo  "<tr><td>" . "Make:" . $roww["Make"] . "</td></tr>";
                                        echo  "<tr><td>" . "Engine:" . $roww["Engine"] . "</td></tr>";
                                        echo  "<tr><td>" . "Horsepower:" . $roww["Horsepower"] . "</td></tr>";
                                        echo  "<tr><td>" . "Price:" . $roww["Price"] . "</td></tr>";
                                    }

                                    echo "</tbody>";
                                    echo "</table>";
                                    // }


                                    ?>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Luxory/Merc S-class.jpeg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Mercedes-Benz S-Class</h4>
                            <p class="card-text">Mercedes-Benz</p>

                            <button id="hide13" class="btn btn-primary">Hide details</button>
                            <button id="show13" class="btn btn-primary">Show details</button>


                            <table class="hidd13">

                                <thead>
                                    <tr>

                                    </tr>
                                </thead>
                                <tbody>
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `luxory` WHERE `Model` = 'Mercedes-Benz S-Class'";
                                    $res = mysqli_query($conn, $sql);

                                    while ($roww = mysqli_fetch_assoc($res)) {


                                        echo  "<tr><td>" . "Model:" . $roww["Model"] . "</td></tr>";
                                        echo  "<tr><td>" . "Make:" . $roww["Make"] . "</td></tr>";
                                        echo  "<tr><td>" . "Engine:" . $roww["Engine"] . "</td></tr>";
                                        echo  "<tr><td>" . "Horsepower:" . $roww["Horsepower"] . "</td></tr>";
                                        echo  "<tr><td>" . "Price:" . $roww["Price"] . "</td></tr>";
                                    }

                                    echo "</tbody>";
                                    echo "</table>";
                                    // }


                                    ?>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Luxory/Merc S-class.jpeg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Mercedes-Benz S-Class</h4>
                            <p class="card-text">Mercedes-Benz</p>

                            <button id="hide14" class="btn btn-primary">Hide details</button>
                            <button id="show14" class="btn btn-primary">Show details</button>


                            <table class="hidd14">

                                <thead>
                                    <tr>

                                    </tr>
                                </thead>
                                <tbody>
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `luxory` WHERE `Model` = 'Mercedes-Benz S-Class'";
                                    $res = mysqli_query($conn, $sql);

                                    while ($roww = mysqli_fetch_assoc($res)) {


                                        echo  "<tr><td>" . "Model:" . $roww["Model"] . "</td></tr>";
                                        echo  "<tr><td>" . "Make:" . $roww["Make"] . "</td></tr>";
                                        echo  "<tr><td>" . "Engine:" . $roww["Engine"] . "</td></tr>";
                                        echo  "<tr><td>" . "Horsepower:" . $roww["Horsepower"] . "</td></tr>";
                                        echo  "<tr><td>" . "Price:" . $roww["Price"] . "</td></tr>";
                                    }

                                    echo "</tbody>";
                                    echo "</table>";
                                    // }


                                    ?>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Luxory/Merc S-class.jpeg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Mercedes-Benz S-Class</h4>
                            <p class="card-text">Mercedes-Benz</p>

                            <button id="hide15" class="btn btn-primary">Hide details</button>
                            <button id="show15" class="btn btn-primary">Show details</button>


                            <table class="hidd15">

                                <thead>
                                    <tr>

                                    </tr>
                                </thead>
                                <tbody>
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `luxory` WHERE `Model` = 'Mercedes-Benz S-Class'";
                                    $res = mysqli_query($conn, $sql);

                                    while ($roww = mysqli_fetch_assoc($res)) {


                                        echo  "<tr><td>" . "Model:" . $roww["Model"] . "</td></tr>";
                                        echo  "<tr><td>" . "Make:" . $roww["Make"] . "</td></tr>";
                                        echo  "<tr><td>" . "Engine:" . $roww["Engine"] . "</td></tr>";
                                        echo  "<tr><td>" . "Horsepower:" . $roww["Horsepower"] . "</td></tr>";
                                        echo  "<tr><td>" . "Price:" . $roww["Price"] . "</td></tr>";
                                    }

                                    echo "</tbody>";
                                    echo "</table>";
                                    // }


                                    ?>

                        </div>
                    </div>
                </div>


            </div>
        </div>


    </section>










</body>

</html>