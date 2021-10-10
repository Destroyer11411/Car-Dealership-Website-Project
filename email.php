<?php
$takename = $_POST['uname'];
$takepass = $_POST['pswd'];

$conn = mysqli_connect("localhost","root","","project_1",3307);

if(!$conn)
{
    die("The connection was not succesful".mysqli_connect_error());

}

$sql = "INSERT INTO  `request` (`Name`,`Email`) VALUES ('$takename','$takepass')";
mysqli_query($conn,$sql);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
.center{
   margin-left: 30%;
   margin-top: 10%;
    align-items: center;
}

.buttonn{
    margin-left: 170px;
}


        </style>

</head>
<body>
    <div class="center">
    <h2> Your request was succesfully posted </h2>
    <h1> We will contact you shortly </h1>
    <br>
    <br>
    <a href="new.html" class="buttonn">
    <button id="show" class="btn btn-secondary">Return Home</button>
    </a>
    




</div>


    
</body>
</html>