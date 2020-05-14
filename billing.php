<?php
include('db_connect.php');
$a1=$_POST['name1'];

$a3=$_POST['message1'];
$a4=$_POST['message2'];

$data1=mysqli_query($conn,"insert into checkout(name,address,phonenumber) value('$a1','$a3','$a4')");
if(mysqli_affected_rows($conn)>0)
{
    echo "<script>alert('checkout successfully');window.location='cart22.php';</script>";
}
else
{
    echo "<script>alert('checkout unsuccessful');window.location='cart22.php';</script>";
}
?>