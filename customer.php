<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <style>
table,th,td {
  margin-left: auto;
  margin-right: auto;
  table-layout: fixed;
  width: 90%;
  height:90%;
  border: 4px solid black;
  text-align: center;
  padding: 8px;
}

th{
  font-size:large;
  text-align: center;
  padding: 8px;
  background-color:lightblue;
}

}

 td {
  text-align: center;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

h1{
    text-align:center;
    color: cadetblue;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
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
      
      <br>


<?php
$id = $_GET["id"];
$con=mysqli_connect("localhost","root","","bank");

$sqlget="SELECT * FROM customers where id=$id";
    $result=$con->query($sqlget);
    echo "<table>";
    echo "<tr><th>Name</th><th>ID</th><th>Email</th><th>Balance</th></tr>";
    while($row=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["balance"]."</td>";

        echo "</tr>";
    }
    echo "</table>";
?>

<div class="container">
      <div class="center">
      <a href="transfer.php" class="btn btn-dark btn-lg" role="button" data-bs-toggle="button">Transfer Money</a>
    </div>
    </div>
</body>
</html>