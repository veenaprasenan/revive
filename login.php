<?php

if(isset($_POST['s1'])){
  $uname=$_POST['n1'];
  $pass=$_POST['p1'];

  if(!empty($uname) || !empty($pass)){
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="registration";

    $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

    session_start();

     if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form



        $sql = "SELECT id FROM reister WHERE uname = '$uname' and password = '$pass'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);
        $name= "SELECT fname,lname from reister where uname='$uname' and password='$pass'";
        $res=mysqli_query($conn,$name);
          if($count == 1) {



               header("location: login.html");

            }else {
              //header('demo.php');
              echo '<script type="text/javascript">alert("Sorry Invalid credential");window.location.href="index.html";</script>';


          }

  }
}
}

 ?>
