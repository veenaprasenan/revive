

<?php

if (isset($_POST['submit'])){
        $csno=$_POST['csno'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $gender=$_POST['gen'];
        $address=$_POST['address'];
        $mobno=$_POST['number'];
        $email=$_POST['email'];
        $uname=$_POST['uname'];
        $pass=$_POST['pass'];
        $cpass=$_POST['cpass'];

        if(!empty($csno)|| !empty($fname) || !empty($lname) || !empty($gender) || !empty($address) || !empty($mobno) || !empty($email) || !empty($uname) || !empty($pass) || !empty($cpass) )
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
          $SELECT= "SELECT email from reister where email=? Limit 1 ";
          $INSERT= "INSERT Into reister (csno,fname,lname,gender,address,mobileno,email,uname,password,cpassword) values (?,?,?,?,?,?,?,?,?,?)";
          //prepare statement...
          $stmt=$conn->prepare($SELECT);
          $stmt->bind_param( 's', $email);
          $stmt->execute();
          $stmt->bind_result($email);
          $stmt->store_result();
          $rnum=$stmt->num_rows();

          if ($rnum==0) {
            $stmt->close();

            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param('ssssssssss',$csno, $fname,$lname,$gender,$address,$mobno,$email,$uname,$pass,$cpass);
            $stmt->execute();
          //  echo"new record inserted successfully";

echo '<script type="text/javascript">alert("Details added successfully.Now login to continue..");window.location.href="index.html";</script>';
          }
          else {
            echo '<script>alert("someone already register using this email.")</script>';
            header('Location:register.html');
          }
          $stmt->close();
          $conn->close();
        }
        }
        else {
          echo "all fields are required";
          die();
        }
}
 ?>
