<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Onine Banking</title>
    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      <a class="navbar-brand" href="#">
          <img src="img/logo.jpeg" alt="" width="40" height="40" class="d-inline-block align-text-top">
      <b>Online Banking</b>
      </a>
 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><b>Home</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="transaction.php"><b>Send Money</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="customers.php"><b>Users</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="history.php"><b>History</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

      <div class="mt-4 p-5 bg-light  rounded">
          <center><h2 class="mt-4 mb-5">WELCOME TO ONLINE BANKING</h2></center>
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <a href="transaction.php"><img src="https://jantapaymentservices.com/Home/images/money-transfer-logo.png" class="rounded float-start  " height="200" width="200"></a>
                    
                </div>
                <div class="col d-flex justify-content-center">
                    <a href="customers.php"><img src="https://www.freeiconspng.com/uploads/user-add-icon---shine-set-add-new-user-add-user-30.png" class="rounded float-start " height="200" width="200"></a>
                </div>
                <div class="col d-flex justify-content-center">
                    <a href="history.php"><img src="https://thumbs.dreamstime.com/b/transaction-history-icon-isolated-white-background-your-web-mobile-app-design-133862670.jpg" class="rounded float-start " height="200" width="200"></a>
                </div>
            </div>
            <div class="row justify-content-center">
                
            </div>
        </div>
      </div>
      

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>