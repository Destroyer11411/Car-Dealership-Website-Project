<?php


if ($_SERVER["REQUEST_METHOD"]  == "POST") {


    $takename = $_POST['name'];
    $takepass = $_POST['password'];
    $showalert  = false;
    include 'partials/_dbconnect.php';

    $sql = "INSERT INTO  `login details` (`username`,`password`) VALUES ('$takename','$takepass')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $showalert = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        * body {
            background-image: url("JMDM5fS\ -\ Imgur.jpg");
            background-repeat: none;
            font-family: 'Baloo Bhai 2', cursive;


        }

        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .center {
            border: 2px solid green;
            background-image: url("backimg1.jpg");
            top: 10%;
            border-radius: 30px;
            left: 35%;
            height: 600px;
            width: 500px;
            position: absolute;
        }

        .h1 {
            text-align: center;
            text-decoration: underline;
            color: rgb(0, 204, 255);
        }



        .nme {
            margin-top: 50px;
            width: 500px;
            border-radius: 30px;
            margin-left: 50px;
            size: 20px;




        }

        .pss {
            margin: 30px 20px;
            margin-left: 50px;
            width: 430px;
            size: 20px;

        }

        .h1 img {
            width: 400px;
            border-radius: 30px;
        }

        .btn {
            margin-left: 90px;
            width: 100px;
            color: black;
            background-color: rgb(11, 166, 238);
            cursor: pointer;
            border-radius: 30px;
            padding: 10px;


        }

        .btn:hover {
            background-color: lightgreen;
        }

        .btn:active {
            background-color: orange;
        }

        .ret:active {
            background-color: orange;
        }

        .ret:hover {
            background-color: rgb(216, 34, 34);
        }

        .ret {
            margin-left: 100px;
            width: 100px;
            cursor: pointer;
            background-color: rgb(11, 166, 238);
            border-radius: 30px;
            padding: 10px;
        }

        .nme1 {
            width: 75%;
        }

        .ret1 {
            width: 87.5%;
        }

        .forpas {
            color: red;
            margin-top: 20px;
            text-align: center;

        }
    </style>
</head>

<body>
    <?php
    if ($showalert) {
        echo '
    }
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You have been succesfully signed up <a href="login1.php" class="alert-link"> Login with your account</a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <header class="header">
        <div class="center">

            <div class="h1">
                <h1> SIGNUP </h1>
                <img src="logo.jpg" alt="">
            </div>

            <div class="container">
                <form action="/project/signup1.php" method="POST">
                    <div class="nme">

                        <input type="textbox" class="nme1" name="name" placeholder="Enter your name">
                    </div>

                    <div class="pss">
                        <input type="password" class="ret1" name="password" placeholder="Enter the password">
                    </div>
                    <div>

                        <!-- <a href="new.html"> -->
                        <button class="btn"> Signup </button>
                        <!-- </a> -->

                        <input type="reset" class="btn" value="Reset">
                    </div>

                </form>
            </div>
        </div>
    </header>

</body>

</html>
