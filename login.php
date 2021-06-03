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


          if($count == 1) {

            echo '<script>alert("Welcome to Geeks for Geeks")</script>' ;

               header("location: login.html");
            }else {
              //header('demo.php');
              echo '<script type="text/javascript">alert("Sorry Invalid credential");window.location.href="demo.html";</script>';


          }

  }
}
}

 ?>
