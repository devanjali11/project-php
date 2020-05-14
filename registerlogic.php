<?php 

include('db_connect.php');

$email1=$_POST['email'];
$fname=$_POST['name1'];
$number=$_POST['mobile'];
$lname=$_POST['name2'];
$password1=$_POST['password'];



$data=mysqli_query($conn," insert into signup (email,phone,first_name,last_name,password) value('$email1','$number','$fname','$lname','$password1')");


if(mysqli_affected_rows($conn)>0)
{
	echo "<script>alert('registration succesfull');window.location='front1.php';</script>";
}
else{
   echo "<script>alert('registration deny');window.location='newsignup.php';</script>";

}
 ?>