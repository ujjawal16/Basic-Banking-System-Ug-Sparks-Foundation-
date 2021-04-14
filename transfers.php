<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        h1{
            text-align:center;
            color:black;
            font-style:italic;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .container {
        height: 200px;
        position: relative;

        }

        .center {
        margin: 0;
        position: absolute;
        top: 40%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        }
        .failed{
            color:red;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:lightblue;position:sticky;z-index:1;top: 0;width: 100%;overflow: hidden;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./images/grip.png" alt="" width="50" height="35">
              </a>
          <a class="navbar-brand" style="font-weight: bold;" href="#">SPARKS FOUNDATION BANK-UG</a>
          <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" 
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse show" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0"> 
              <li class="nav-item">
                <a class="nav-link active" style="font-size: larger;font-weight: bold;" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active " style="font-size: larger;font-weight: bold;" aria-current="page" href="customers.php">Users</a>        
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    

<?php

 $conn=mysqli_connect("localhost","root","","bank");

 $sqlget1="SELECT * FROM customers";
 $sqlget2="SELECT * FROM transfer";
 

 $senderquery="SELECT * FROM customers WHERE email='$_POST[from]'";
 $senderdata=mysqli_query($conn,$senderquery);
 $arrdata=mysqli_fetch_array($senderdata);
 $amount=$_POST['amount'];

 if($arrdata['balance'] >= $amount)
 {
    $sql1 = "UPDATE transfer SET balance=(balance+$amount) WHERE email='$_POST[to]'";
    $sql2 = "UPDATE transfer SET balance=(balance-$amount) WHERE email='$_POST[from]'";
   
    $sql3 = "UPDATE customers SET balance=(balance+$amount) WHERE email='$_POST[to]'";
    $sql4 = "UPDATE customers SET balance=(balance-$amount) WHERE email='$_POST[from]'";
   
   $conn->query($sql2);
   $conn->query($sql3);
   $conn->query($sql4);
    if ($conn->query($sql1) === TRUE) {
       echo "<h1>Transaction Successfull!!</h1>";
       echo '
       <div class="w-25  m-auto">
       <img src="./images/succes.png"  class="card-img-top" style="display: block;margin-left:auto;
       margin-right: auto;" alt="..."><br>
       </div>
       </div>
       </div>
        <div class="container">
        <div class="center">
        <a href="customers.php" class="btn btn-dark btn-lg" role="button" data-bs-toggle="button">View Updated Records</a>
        </div>
        </div>';
     } else {
       echo "<h1>Transation Failed<h1> " ;
       echo '<div class="container">
       <div class="center">
       <a href="customers.php" class="btn btn-dark btn-lg" role="button" data-bs-toggle="button">View Customers</a>
       <br>
       <a href="transfer.php" class="btn btn-dark btn-lg" role="button" data-bs-toggle="button">Transfer Money</a>
       </div>';
    
     }
 }
 else
 {
    echo '<br><div ><h1 class="failed">Sufficient Balance not there!!</h1></div>';
    echo '<div class="container">
          <div class="center">
          <a href="customers.php" class="btn btn-dark btn-lg" role="button" data-bs-toggle="button">View Customers</a>
          <br><br>
          <a href="transfer.php" class="btn btn-dark btn-lg" role="button" data-bs-toggle="button">Transfer Money</a>
          </div>';
 }
 $conn->close();
 ?>

 

</body>
</html>
