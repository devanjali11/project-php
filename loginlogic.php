<?php 

include ('db_connect.php');


$email2=$_POST['email1'];
$pass2=$_POST['pass1'];

$data=mysqli_query($conn,"select * from signup where email='$email2' and password='$pass2' ");

if($data1=mysqli_fetch_array($data))
{
     session_start();
    $_SESSION['ses_id']=$data1['user_id'];
    echo "<script>alert('login succesfull');window.location='front2.php';</script>";
}
else
{
    echo "<script>alert('can't login');window.location='front1.php';</script>";
}


 ?>
