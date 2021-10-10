<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newest Arrivals</title>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUV</title>

    //for ajax//
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    //for the font//
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">

    //for the cards//
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    // for the navbar//
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <style>
        * {
            font-family: 'Baloo Bhai 2', cursive;
        }

        body {

            overflow-x: hidden;
            /* Hide horizontal scrollbar */
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
                <h1> <span class="badge bg-secondary">Newest Arrivals</span></h1>
            </div>
        </div>



        <div class="containerfluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Newarrivals/koenigsegg jesko1.jpg" alt="Card image">
                        <div class="card-body">
                            <hr>
                            <h4 class="card-title">Koenigsegg Jesko</h4>
                            <p class="card-text">Koenigsegg</p>

                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Newarrivals/koenigsegg gemera.jpg" alt="Card image">
                        <div class="card-body">
                            <hr>
                            <h4 class="card-title">Koenigsegg Gemera</h4>
                            <p class="card-text">Koenigsegg</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Newarrivals/amg one.jpg" alt="Card image">
                        <div class="card-body">
                            <hr>
                            <h4 class="card-title">AMG One</h4>
                            <p class="card-text">Mercedes</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Newarrivals/Aventador ultimae.jpg" alt="Card image">
                        <div class="card-body">
                            <hr>
                            <h4 class="card-title">Aventador Ultimae</h4>
                            <p class="card-text">Lamborhghini</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Newarrivals/sto.jpg" alt="Card image">
                        <div class="card-body">
                            <hr>
                            <h4 class="card-title">Huracan STO</h4>
                            <p class="card-text">Lamborhghini</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card" style="width:500px">
                        <img class="card-img-top" src="Newarrivals/Super sport 300+.jpg" alt="Card image">
                        <div class="card-body">
                            <hr>
                            <h4 class="card-title">Chiron Super Sport 300+</h4>
                            <p class="card-text">Bugatti</p>

                        </div>
                    </div>
                </div>



            </div>
        </div>








    </section>






    


</body>

</html>