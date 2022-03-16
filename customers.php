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

    <title>Customers</title>
  </head>
  <body>
      <?php
      $con = mysqli_connect("localhost", "root", "", "banking") or die(mysqli_errno($con));
      $query = "select id,name,email,balance from customers";
      $result = mysqli_query($con, $query) or die(mysqli_error($con));
     
      ?>
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
                    <a class="nav-link" href="transaction.php"><b>send Money</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"><b>Users</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="history.php"><b>History</b></a>
                </li>
              </ul>
            </div>
        </div>
    </nav>
  <center><h2>Customers</h2></center>
  <div class="container">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Balance</th>
            </tr>
          </thead>
          <tbody>
          
            <?php
            $n = mysqli_num_rows($result);
            for($x = 0; $x < $n; $x++)
            {
                $row = mysqli_fetch_array($result);
                $_SESSION["r1"] = $row[1];
                ?>
              
              <tr>
              <th scope="row"><?php echo $row[0]; ?></th>
              <td><?php echo $row[1]; ?></td>
              <td><?php echo $row[3]; ?></td>
              
            </tr>  
            <?php }
            ?>
            
          </tbody>
        </table>
      <b><a href="transaction.php" style="text-decoration: none">Click Here </a></b><span>to transfer the money</span>
  </div>

      
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>