
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>history</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
      .logs{
        position: absolute;
        top: 110%;
        width: 90%;
        height: 50px;
        margin-left: 500px;
      }
      .logs input[type=submit]{
         float: none;
         display: block;
         text-align: left;
         width: 100%;
         margin: 0;
         padding: 14px;
      }
      .tableform{
        width: 500px;
        height: 200px;
        position: absolute;
        top: 150%;
        left: 30%;
      }
      table {
          font-size: large;
          border: 1px solid black;
          margin-left:0px;
      }

      td {
          background-color: WHITE;
          border: 1px solid black;
      }

      th,
      td {
          font-weight: bold;
          border: 1px solid black;
          padding: 10px;
          text-align: center
      }

      td {
          font-weight: lighter;
      }
      .back{
        position: absolute;
        top: 110%;
        margin-left: 400px;
        font-size: 20px;
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
                      <a href="logs.php"> <i class="fa fa-history"></i>History</a>
                      <a href="#"> <i class="fa fa-exclamation-circle"></i>About</a>

                      <div class="nav-login">
                        <a href="logout.php"><i class="fa fa-power-off"></i>Logout</a>

                      </div>

                </div>

      </div>
  <!-- header ends-->
<div class="back">
<a href="login.html" ><i class="fa fa-arrow-circle-o-left"></i>Back</a>

</div>

<div class="logs">
<form class="" action="logs.php" method="post">

<input type="text" placeholder="Search..by Veh.No" name="s1">
      <button type="submit">Search</button>
      <label for="dat">Dates from</label>
      <input type="date" name="dat" value="" placeholder="From date">
		  <button type="submit" name="search" class="btn btn-primary">Search</button>

</form>

</div>

<div class="tableform">
<h2>Accident History</h2>
    <table class="table">
              <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Vehicle No:</th>
                <th>Level of impact</th>
                <th>Location</th>
                <th>Date</th>
              </tr>
    <?php
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="registration";
    $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

    if(isset($_POST['search']))
    {
    $dat=$_POST['dat'];
    $sql="SELECT name,address,vno,roi,location,dat FROM history where dat like '{$dat}%'";
    $result=mysqli_query($conn,$sql);

    while($row_member = $result->fetch_assoc()){

    ?>
    <tr>
      <td> <?php echo $row_member['name']; ?></td>
      <td> <?php echo $row_member['address']; ?></td>
      <td> <?php echo $row_member['vno']; ?></td>
      <td> <?php echo $row_member['roi']; ?></td>
      <td> <?php echo $row_member['location']; ?></td>
      <td> <?php echo $row_member['dat']; ?></td>

    </tr>
  <?php   }
  if ($row_member==0) {
    // code...

  ?>

<?php
}}
     ?>

  </table>

</div>

  </body>
</html>
