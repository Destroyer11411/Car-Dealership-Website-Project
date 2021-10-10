<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hatchbacks</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
  </script>


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



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
        <h1> <span class="badge bg-secondary">Hatchbacks</span></h1>
      </div>
    </div>

    <div class="containerfluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">

          <div class="card" style="width:500px">
            <img class="card-img-top" src="Hatchbacks/ford focus.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Focus RS</h4>
              <p class="card-text">Ford</p>

              <button id="hide" class="btn btn-primary">Hide details</button>
              <button id="show" class="btn btn-primary">Show details</button>


              <div class="hidd">

                
                  <hr>
                  <?php



                  $sql = "SELECT * FROM `hatchback` WHERE `Model` = 'Focus RS'";
                  $res = mysqli_query($conn, $sql);

                  while ($roww = mysqli_fetch_assoc($res)) {
                    // echo "<tr><td>" . $roww["Model"] ."<br>".  "</td><td>"  ."<br>". $roww["Make"] . "</td><td>" ."<br>". $roww["Engine"] . "</td><td>" ."<br>". $roww["Horsepower"];

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
            <img class="card-img-top" src="Hatchbacks/golf r.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Golf R</h4>
              <p class="card-text">Volkswagen</p>
              <button id="hide1" class="btn btn-primary">Hide details</button>
              <button id="show1" class="btn btn-primary">Show details</button>


              <div class="hidd1">

                
                  <hr>
                  <?php



                  $sql = "SELECT * FROM `hatchback` WHERE `Model` = ' Golf R'";
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
            <img class="card-img-top" src="Hatchbacks/civic type r.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">civic Type R </h4>
              <p class="card-text">Honda</p>
              <button id="hide2" class="btn btn-primary">Hide details</button>
              <button id="show2" class="btn btn-primary">Show details</button>


              <div class="hidd2">

               
                  <hr>
                  <?php



                  $sql = "SELECT * FROM `hatchback` WHERE `Model` = 'Civic Type-R'";
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

          <div class="card" style="width:500px">
            <img class="card-img-top" src="Hatchbacks/renault.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Renault sport Megane 275 Cup-S</h4>
              <p class="card-text">Renault</p>
              <button id="hide3" class="btn btn-primary">Hide details</button>
              <button id="show3" class="btn btn-primary">Show details</button>


              <div class="hidd3">

                
                  <hr>
                  <?php



                  $sql = "SELECT * FROM `hatchback` WHERE `Model` = 'Renaultsport Megane 275 Cup-S'";
                  $res = mysqli_query($conn, $sql);

                  while ($roww = mysqli_fetch_assoc($res)) {


                    echo   $roww["Model"] . "<br>";
                    echo  $roww["Make"] . "<br>";
                    echo    $roww["Engine"] . "<br>";
                    echo    $roww["Horsepower"] . "<br>";
                    echo   $roww["Price"] . "<br>";
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
            <img class="card-img-top" src="Hatchbacks/seat.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Seat Leon Cupra 290</h4>
              <p class="card-text">Seat</p>
              <button id="hide4" class="btn btn-primary">Hide details</button>
              <button id="show4" class="btn btn-primary">Show details</button>


              <div class="hidd4">

                <thead>
                  <tr>

                  </tr>
                </thead>
                <tbody>
                  <hr>
                  <?php



                  $sql = "SELECT * FROM `hatchback` WHERE `Model` = 'Seat Leon Cupra 290'";
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
      </div>
    </div>


  </section>


</body>

</html>