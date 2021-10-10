<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports cars</title>

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
            $(".hidd2").hide();
            $("#hide2").click(function() {
                $(".hidd2").slideUp();
            });
            $("#show2").click(function() {
                $(".hidd2").slideDown();
            });
        });
        $(document).ready(function() {
            $(".hidd3").hide();
            $("#hide3").click(function() {
                $(".hidd3").slideUp();
            });
            $("#show3").click(function() {
                $(".hidd3").slideDown();
            });
        });
        $(document).ready(function() {
            $(".hidd4").hide();
            $("#hide4").click(function() {
                $(".hidd4").slideUp();
            });
            $("#show4").click(function() {
                $(".hidd4").slideDown();
            });
        });
        $(document).ready(function() {
            $(".hidd5").hide();
            $("#hide5").click(function() {
                $(".hidd5").slideUp();
            });
            $("#show5").click(function() {
                $(".hidd5").slideDown();
            });
        });
        $(document).ready(function() {
            $(".hidd6").hide();
            $("#hide6").click(function() {
                $(".hidd6").slideUp();
            });
            $("#show6").click(function() {
                $(".hidd6").slideDown();
            });
        });

        $(document).ready(function() {
            $(".hidd7").hide();
            $("#hide7").click(function() {
                $(".hidd7").slideUp();
            });
            $("#show7").click(function() {
                $(".hidd7").slideDown();
            });
        });

        $(document).ready(function() {
            $(".hidd8").hide();
            $("#hide8").click(function() {
                $(".hidd8").slideUp();
            });
            $("#show8").click(function() {
                $(".hidd8").slideDown();
            });
        });

        $(document).ready(function() {
            $(".hidd9").hide();
            $("#hide9").click(function() {
                $(".hidd9").slideUp();
            });
            $("#show9").click(function() {
                $(".hidd9").slideDown();
            });
        });


        $(document).ready(function() {
            $(".hidd10").hide();
            $("#hide10").click(function() {
                $(".hidd10").slideUp();
            });
            $("#show10").click(function() {
                $(".hidd10").slideDown();
            });
        });
        $(document).ready(function() {
            $(".hidd11").hide();
            $("#hide11").click(function() {
                $(".hidd11").slideUp();
            });
            $("#show11").click(function() {
                $(".hidd11").slideDown();
            });
        });
        $(document).ready(function() {
            $(".hidd12").hide();
            $("#hide12").click(function() {
                $(".hidd12").slideUp();
            });
            $("#show12").click(function() {
                $(".hidd12").slideDown();
            });
        });
        $(document).ready(function() {
            $(".hidd13").hide();
            $("#hide13").click(function() {
                $(".hidd13").slideUp();
            });
            $("#show13").click(function() {
                $(".hidd13").slideDown();
            });
        });
        $(document).ready(function() {
            $(".hidd14").hide();
            $("#hide14").click(function() {
                $(".hidd14").slideUp();
            });
            $("#show14").click(function() {
                $(".hidd14").slideDown();
            });
        });

        $(document).ready(function() {
            $(".hidd15").hide();
            $("#hide15").click(function() {
                $(".hidd15").slideUp();
            });
            $("#show15").click(function() {
                $(".hidd15").slideDown();
            });
        });
    </script>


    <style>
        * {
            font-family: 'Baloo Bhai 2', cursive;
        }

        body {
            
            overflow-x: hidden;
            /* Hide horizontal scrollbar */
        }

        .hidden {
            display: none;
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
                        <a class="nav-link" aria-current="page" href="aboutus.html">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="newarrivals.php">Newest Arivals</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="categories.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="sports.php">Sports cars</a></li>
                            <li><a class="dropdown-item" href="luxory.php">Luxury cars</a></li>
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



                                <thead>
                                    <tr>

                                    </tr>
                                </thead>
                                <tbody>
                                    <hr>

                                    <?php



                                    $sql = "SELECT * FROM `sports` WHERE `Model` = 'Aventador SVJ'";
                                    $res = mysqli_query($conn, $sql);

                                    while ($roww = mysqli_fetch_assoc($res)) {

                                        echo   "Model:" . $roww["Model"] . "<br>";
                                        echo   "Make:" . $roww["Make"] . "<br>";
                                        echo   "Engine:" . $roww["Engine"] . "<br>";
                                        echo   "Horsepower:" . $roww["Horsepower"] . "<br>";
                                        echo   "Price:" . $roww["Price"] . "<br>";
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
                        <img class="card-img-top" src="sports/Huracan Evo.jpeg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Huracan Evo</h4>
                            <p class="card-text">Lamborghini</p>


                            <button id="hide1" class="btn btn-primary">Hide details </button>
                            <button id="show1" class="btn btn-primary">Show details</button>


                            <div class="hidd1">
                                <hr>

                               
                                    <?php



                                    $sql = "SELECT * FROM `sports` WHERE `Model` = 'Huracan Evo'";
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
                        <img class="card-img-top" src="sports/720S.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">720S </h4>
                            <p class="card-text">McLaren</p>


                            <button id="hide2" class="btn btn-primary">Hide details</button>
                            <button id="show2" class="btn btn-primary">Show details</button>


                            <div class="hidd2">

                               
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `sports` WHERE `Model` = '720S'";
                                    $res = mysqli_query($conn, $sql);

                                    while ($roww = mysqli_fetch_assoc($res)) {


                                        echo   "Model:" . $roww["Model"] . "<br>";
                                        echo   "Make:" . $roww["Make"] . "<br>";
                                        echo   "Engine:" . $roww["Engine"] . "<br>";
                                        echo   "Horsepower:" . $roww["Horsepower"] . "<br>";
                                        echo   "Price:" . $roww["Price"] . "<br>";
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


                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="sports/570s.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">570S</h4>
                            <p class="card-text">McLaren</p>

                            <button id="hide3" class="btn btn-primary" >Hide details</button>
                            <button id="show3" class="btn btn-primary" >Show details</button>


                            <div class="hidd3">

                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `sports` WHERE `Model` = '570S'";
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
                        <img class="card-img-top" src="sports/F1 LM.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">F1 LM</h4>
                            <p class="card-text">McLaren</p>

                            <button id="hide4" class="btn btn-primary" >Hide details</button>
                            <button id="show4" class="btn btn-primary" >Show details</button>


                            <div class="hidd4">

                               
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `sports` WHERE `Model` = 'F1 LM'";
                                    $res = mysqli_query($conn, $sql);

                                    while ($roww = mysqli_fetch_assoc($res)) {


                                        echo   "Model:" . $roww["Model"] . "<br>";
                                        echo   "Make:" . $roww["Make"] . "<br>";
                                        echo   "Engine:" . $roww["Engine"] . "<br>";
                                        echo   "Horsepower:" . $roww["Horsepower"] . "<br>";
                                        echo   "Price:" . $roww["Price"] . "<br>";
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
                        <img class="card-img-top" src="sports/sian.jpg" alt="Card image" width="300px" height="300px">
                        <div class="card-body">
                            <h4 class="card-title">Sian fpk</h4>
                            <p class="card-text">Lamborghini</p>

                            <button id="hide5" class="btn btn-primary" >Hide details</button>
                            
                            <button id="show5" class="btn btn-primary">Show details</button>


                            <div class="hidd5">

                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `sports` WHERE `Model` = 'Sian fpk'";
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

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                </div>



                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px" style=" height:300px">
                        <img class="card-img-top" src="sports/488 pista.jpg" alt="Card image" width="300px" height="250px">
                        <div class="card-body">
                            <h4 class="card-title">488 Pista</h4>
                            <p class="card-text">Ferrari</p>

                            <button id="hide6" class="btn btn-primary">Hide details</button>
                            <button id="show6" class="btn btn-primary">Show details</button>


                            <div class="hidd6">

                                
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `sports` WHERE `Model` = '488 Pista'";
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
                        <img class="card-img-top" src="sports/la purrari.jpg" alt="Card image" width="300px" height="250px">
                        <div class="card-body">
                            <h4 class="card-title">La Ferrari</h4>
                            <p class="card-text">Ferrari</p>

                            <button id="hide7" class="btn btn-primary">Hide details</button>
                            <button id="show7" class="btn btn-primary">Show details</button>


                            <div class="hidd7">

                               
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `sports` WHERE `Model` = 'La Ferrari'";
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
                        <img class="card-img-top" src="sports/p1.jpg" alt="Card image" width="300px" height="300px">
                        <div class="card-body">
                            <h4 class="card-title">P1</h4>
                            <p class="card-text">McLaren</p>


                            <button id="hide8" class="btn btn-primary">Hide details</button>
                            <button id="show8" class="btn btn-primary">Show details</button>


                            <div class="hidd8">

                                <thead>
                                    <tr>

                                    </tr>
                                </thead>
                                <tbody>
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `sports` WHERE `Model` = 'P1'";
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

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

               



                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="sports/918 spyder.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">918 Spyder</h4>
                            <p class="card-text">Porsche</p>


                            <button id="hide9" class="btn btn-primary">Hide details</button>
                            <button id="show9" class="btn btn-primary">Show details</button>


                            <div class="hidd9">

                                <thead>
                                    <tr>

                                    </tr>
                                </thead>
                                <tbody>
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `sports` WHERE `Model` = '918 Spyder'";
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
                        <img class="card-img-top" src="sports/jalpa.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Jalpa</h4>
                            <p class="card-text">Lamborghini</p>

                            <button id="hide10" class="btn btn-primary">Hide details</button>
                            <button id="show10" class="btn btn-primary">Show details</button>


                            <div class="hidd10">

                                
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `sports` WHERE `Model` = 'Jalpa'";
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
                        <img class="card-img-top" src="sports/sesto1.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Sesto Elemento</h4>
                            <p class="card-text">Lamborghini</p>

                            <button id="hide11" class="btn btn-primary">Hide details</button>
                            <button id="show11" class="btn btn-primary">Show details</button>


                            <div class="hidd11">

                                
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `sports` WHERE `Model` = 'Sesto Elemento'";
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

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="sports/murciealogo.png" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Murcielago</h4>
                            <p class="card-text">Lamborghini</p>

                            <button id="hide12" class="btn btn-primary">Hide details</button>
                            <button id="show12" class="btn btn-primary">Show details</button>


                            <div class="hidd12">

                               
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `sports` WHERE `Model` = 'Murcielago'";
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
                        <img class="card-img-top" src="sports/centenario.png" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Centenario</h4>
                            <p class="card-text">Lamborghini</p>

                            <button id="hide13" class="btn btn-primary">Hide details</button>
                            <button id="show13" class="btn btn-primary">Show details</button>


                            <div class="hidd13">

                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `sports` WHERE `Model` = 'Centenario'";
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
                        <img class="card-img-top" src="sports/huayra.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Huayra Roadster</h4>
                            <p class="card-text">Pagani</p>

                            <button id="hide14" class="btn btn-primary">Hide details</button>
                            <button id="show14" class="btn btn-primary">Show details</button>


                            <div class="hidd14">

                                
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `sports` WHERE `Model` = 'Huayra Roadster'";
                                    $res = mysqli_query($conn, $sql);

                                    while ($roww = mysqli_fetch_assoc($res)) {


                                        echo  "Model:" . $roww["Model"] . "<br>";
                                        echo  "Make:" . $roww["Make"] . "<br>";
                                        echo  "Engine:" . $roww["Engine"] . "<br>";
                                        echo  "Horsepower:" . $roww["Horsepower"] . "<br>";
                                        echo  "Price:" . $roww["Price"] . "<br>";
                                    }

                                   


                                    ?>

                        </div>
                        </div>
                    </div>
                </div>

                <br>
                <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="one"></div>
                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="sports/veneno.png" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Veneno</h4>
                            <p class="card-text">Lamborghini</p>

                            <button id="hide15" class="btn btn-primary">Hide details</button>
                            <button id="show15" class="btn btn-primary">Show details</button>


                            <div class="hidd15">

                                
                                    <hr>
                                    <?php



                                    $sql = "SELECT * FROM `sports` WHERE `Model` = 'Veneno'";
                                    $res = mysqli_query($conn, $sql);

                                    while ($roww = mysqli_fetch_assoc($res)) {


                                        echo  "Model:" . $roww["Model"] . "<br>";
                                        echo  "Make:" . $roww["Make"] . "<br>";
                                        echo  "Engine:" . $roww["Engine"] . "<br>";
                                        echo  "Horsepower:" . $roww["Horsepower"] . "<br>";
                                        echo  "Price:" . $roww["Price"] . "<br>";
                                    }

                                   
                                    // }


                                    ?>

                        </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </section>










</body>

</html>