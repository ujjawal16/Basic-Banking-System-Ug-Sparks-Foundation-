<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
          <div class="py-5">
              <h1 style="color:darkgreen" class="text-center">Transfer</h1>
          </div>


     <div class="w-50 m-auto">
      <form action="transfers.php" method="POST">
        <div class="form-group">
            <label for="email"><h4 style="color: cornflowerblue;"><b>Transfer From</b></h4></label>
            <input type="email" class="form-control" placeholder="Enter email" id="from" name="from">
          </div>
          <div class="form-group">
            <label for="email"><h4 style="color: cornflowerblue;"><b>Transfer To</b></h4></label>
            <input type="email" class="form-control" placeholder="Enter email" id="to" name="to">
          </div>
          <div class="form-group">
            <label for="email"><h4 style="color: cornflowerblue;"><b>Enter Amount(&#8377;)</b></h4></label>
            <input type="number" class="form-control" placeholder="Enter Amount" id="amount" name="amount">
          </div>
          <div style="display: flex;
          justify-content: center;
          align-items: center;">
           <button  style="border: 2px solid black;" class="btn btn-primary">TRANSFER</button>
          </div>
         
      </form>
    </div>

</body>
</html>