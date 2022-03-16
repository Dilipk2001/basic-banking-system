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

    <title>transaction</title>
   
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
              <a class="navbar-brand" href="index.php">
                  <img src="img/logo.jpeg" alt="" width="40" height="40" class="d-inline-block align-text-top">
              <b>Online Banking</b>
              </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php"><b>Home</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"><b>send money</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="customers.php"><b>users</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="history.php"><b>History</b></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      
      <div class="container">
          <div class="mt-4 p-5 bg-light  rounded">
              <center><h2>Welcome To Online Banking</h2></center>
              <form method="post" action="postform.php" class="my-5" >
                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 offset-sm-2 col-form-label">From :</label>
                    <div class="col-sm-6">
                        <select class="form-select" aria-label="Default select example" name="from" required="">
                      <option selected disabled value="">Money Transfer From User...</option>
                      <?php
                          $con = mysqli_connect("localhost", "root", "", "banking") or die(mysqli_errno($con));
                          $query = "select id,name,email,balance from customers";
                          $result = mysqli_query($con, $query) or die(mysqli_error($con));
                          $n = mysqli_num_rows($result);
                            for($i =0;$i<$n;$i++)
                            {
                                
                                $row = mysqli_fetch_array($result);
                                ?>
                            <option><?php echo $row[1] ?></option>
                            <?php  }
                            ?>
                    </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 offset-sm-2 col-form-label">User Name :</label>
                    <div class="col-sm-6">
                        <select class="form-select" aria-label="Default select example" name="to" required="">
                            <option selected disabled value="">Money Transfer To User..</option>
                      <?php
                          $con = mysqli_connect("localhost", "root", "", "banking") or die(mysqli_errno($con));
                          $query = "select id,name,email,balance from customers";
                          $result = mysqli_query($con, $query) or die(mysqli_error($con));
                          $n = mysqli_num_rows($result);
                            for($i =0;$i<$n;$i++)
                            {
                                $row = mysqli_fetch_array($result);
                                ?>
                            <option><?php echo $row[1] ?></option>
                            <?php  }
                            ?>
                    </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="Amount" class="col-sm-2 offset-sm-2 col-form-label">Amount :</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="amount" required="">
                    </div>
                  </div>
                
                  <center><button type="text/css" class="btn btn-primary">Transfer</button></center>
                </form>
                 
 
   
       
  
              </div>
          </div>
          
      </div>
   
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>