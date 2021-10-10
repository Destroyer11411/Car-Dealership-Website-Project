<?php
$takename = $_POST['name'];
$takepass = $_POST['password'];

$conn = mysqli_connect("localhost","root","","project_1",3307);

if(!$conn)
{
    die("The connection was not succesful".mysqli_connect_error());

}

$sql = "INSERT INTO  `login details` (`username`,`password`) VALUES ('$takename','$takepass')";
$result = mysqli_query($conn,$sql);




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect page</title>


    <style>

        *{
            background-color:black;
        }
     .btn{
         margin-left:50%;
         
         border-radius:10px;
         background-color:lightgreen;
         padding:10px;
          }

          .h2{
              text-align:center;
            margin-left: 40%;
            margin-top: 10%;
            padding: 10px;
            background-color: lightgreen;
            margin-right: 39%; 
            cursor:pointer;

          }   

          .btn:hover{
              background-color:lightblue;
              cursor:pointer;

          }
        
        
    </style>

</head>
<body>
    
     <h2 class = h2 > Your login was Succesful! <h2>
         <form action = "new.html">
         <a href="new.html">
          <button class="btn"> Next </button>
         </a> 
         <form>




</body>
</html>