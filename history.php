<?php
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="registration";

$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

$qry= "SELECT * from reister";
$result=mysqli_query($conn,$qry);
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>history</title>

    <style>
      .header
      {
        /* background: url(https://sso.kerala.gov.in/Kerala/images/kerala/Bg_reduced.png);*/
        width: 100vw;
        position: relative;
        margin-left: -50vw;
      margin-top:-1.1vh;
        height: 150px;
        left: 50%;
        background-color: #37517e;
      }
      .menu
      {
        height: 70px;
        width: 600px;
        float:right ;
        margin-right: 10%;
        margin-top: 50px;
      }
      .menu a
      {
        float: center;
        text-align: center;
        color: white;
        font-size: 20px;
        padding: 15px;
        text-decoration: none;
      }
      .logo
      {
        float: left;
        height:100px;
        width: 50px;
        margin-left: 15%;
      }
      .menu a:hover
      {
      color: cyan;
      }
      .nav-login
      {
        margin-left:80%;
        margin-top:-4vh;
      }
      .nav-login a
      {
        display:inline-block;
        padding:10px;
        border-radius:20px;
        background-color:#2C9DD5;
      }
      </style>
  </head>
  <body>
    <div class="header">

      <div width="100%">

          <div class="logo">

            <img src="logo.png" alt="img" width="270" height="150">

          </div>

          <!--menu bar -->
                <div class="menu">


                      <a href="#"> <i class="fa fa-fw fa-envelope"></i>Contacts</a>
                      <a href="history.html"> <i class="fa fa-history"></i>History</a>
                      <a href="#"> <i class="fa fa-exclamation-circle"></i>About</a>

                      <div class="nav-login">
                        <a href="logout.php"><i class="fa fa-power-off"></i>Logout</a>

                      </div>

                </div>

      </div>
  <!-- header ends-->
<form class="" action="index.html" method="post">

name<input type="text" name="n1" value="">
address <input type="text" name="a1" value="">
location  <input type="text" name="l1" value="">

</form>


  </body>
</html>