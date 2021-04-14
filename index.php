
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
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
     
      <div class="card" style="position: relative;width:100%;height:10%;padding-left: 20px;padding-right: 20px;">
        <div  style="float: left;position: absolute;left: 100px;top: 200px;z-index: 1000;">
            <a href="customers.php" class="btn btn-light btn-lg " tabindex="-1" role="button" aria-disabled="true">View Users</a>
            <br><br>
            <a href="transfer.php" class="btn btn-light btn-lg" tabindex="-1" role="button" aria-disabled="true">Transfer Money</a>

        </div>
        <img src="./images/bankf.jpg" class="card-img-top" style="display: block;margin-left:auto;
        margin-right: auto;" alt="..."><br>
        <p style="color:mediumturquoise;text-align: center;font-family: 'Times New Roman', Times, serif;font-style: italic;font-weight: bolder;font-size: xx-large;">Banking a whole New Experience...</p>
        <br>
      </div>
    </div>
    
   
      <footer style="text-align: center;
      padding: 3px;
      background-color:grey;
      color:black;">
        <p style="font-size: large;font-weight: bold;font-size:large;font-weight:bolder">Copyright&copy;GRIP-UGDev:Banking<br>
        
      </footer>


</body>

</style>
</html>