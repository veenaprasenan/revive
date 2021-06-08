<?php
if (isset($_POST['s1'])){
        $name=$_POST['n1'];
        $addr=$_POST['a1'];
        $loc=$_POST['l1'];
        $veh=$_POST['v1'];
        $rate=$_POST['r1'];
        $date=$_POST['d1'];


        if(!empty($name) || !empty($addr) || !empty($loc) || !empty($veh) || !empty($rate) || !empty($date) )
        {
          $host="localhost";
          $dbUsername="root";
          $dbPassword="";
          $dbname="registration";

          $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);


        if (mysqli_connect_error()) {
          die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else {
          $sql= "INSERT Into history(name,address,location,vno,roi,dat) values ('$name','$addr','$loc','$veh','$rate','$date')";
          if(mysqli_query($conn,$sql))
          {
          echo '<script type="text/javascript">alert("Details added successfully..");window.location.href="login.html";</script>';
          }

        $conn->close();
      }
    }
        else {
          echo"all fields are required";
          die();
        }
      }
      ?>
