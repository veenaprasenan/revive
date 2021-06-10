<?php

// Username is root
$user = 'root';
$password = '';

// Database name is gfg
$database = 'registration';

// Server is localhost with
// port number 3308
$servername='localhost';
$mysqli = new mysqli($servername, $user,
                $password, $database);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
if(isset())
// SQL query to select data from database
$sql = "SELECT * FROM history ORDER BY dat DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            font-size: large;
            border: 1px solid black;
            margin-left:0px;
        }

        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }

        td {
            background-color: #E4F5D4;
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


  <div class="logs">
  <form class="" action="logs.php" method="post">
  <!--  <input type="text" placeholder="Search..by Veh.No" name="s1">
    <button type="submit">Search</button>      -->
    <label for="dat">Dates from</label>
    <input type="date" name="dat" value="" placeholder="From date">
    <button type="submit" name="search" class="btn btn-primary">Search</button>


  </form>

    <section>
        <h1>History</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>vno</th>
                <th>date</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['address'];?></td>
                <td><?php echo $rows['vno'];?></td>
                <td><?php echo $rows['dat'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>

</html>
