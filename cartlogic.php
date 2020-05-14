<?php
include('db_connect.php');
$pr_id=$_REQUEST['pid'];
session_start();
 $idd=$_SESSION['ses_id'];

$var=mysqli_query($conn,"select * from product where p_id='$pr_id'");

$var1=mysqli_fetch_array($var);

$ss1=$var1['p_id'];
$ss2=$var1['image'];
$ss3=$var1['price'];
$ss4=$var1['desc'];


$data=mysqli_query($conn,"insert into cart(product_id,user_id,product_name,price,imagee) value ('$ss1','$idd','$ss4','$ss3','$ss2')");
if(mysqli_affected_rows($conn)>0)
{
	echo "<script>alert('product added succesfully');window.location='cart22.php';</script>";
}
else{
	echo "<script>alert('product not added ');window.location='front2.php';</script>";
}

?>