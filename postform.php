<?php
       $to =  $_POST['to'] ;
       $from = $_POST['from'] ;
       $amt = $_POST['amount'];
       $t=time();
       $date = date("Y-m-d",$t);
      
       
       $state = "sucess";
        $con = mysqli_connect("localhost", "root", "", "banking") or die(mysqli_error($con));
        $first =mysqli_fetch_array( mysqli_query($con,"select balance from customers where name = '$from'"));
        $second =mysqli_fetch_array( mysqli_query($con,"select balance from customers where name = '$to'"));
        if($first[0] >= $amt)
        {
            
            $r1 =  mysqli_query($con, "UPDATE customers SET balance = $first[0]-$amt WHERE name = '$from'") or die(mysqli_error($con));
        
            $r2 =  mysqli_query($con, "UPDATE customers SET balance = $second[0]+$amt WHERE name = '$to'") or die(mysqli_error($con));
           $query = "INSERT INTO transfer(`transfer_from`, `transfer_to`,`amount`, `date`, `state`) VALUES ('$from','$to',$amt,'$date','$state')";
           $result = mysqli_query($con, $query) or die(mysqli_error($con));
            echo '<script> if(confirm("Transaction is complete")) { window.location.assign("index.php"); } </script>';
               
            
        }
        else{
            echo '<script> if(confirm("Not Enough Money to transfer")) { window.location.assign("index.php"); } </script>';
            
        }
        
  

