<?php 

include ('db_connect.php');


$name2=$_POST['name1'];
$email2=$_POST['email1'];
$message2=$_POST['message1'];

$data=mysqli_query($conn,"insert into contactus(name,email,message) values('$name2','$email2','$message2')");

if(mysqli_affected_rows($conn)>0)
{
    echo "<script>alert('contact successful');window.location='front2.php';</script>";
}
else
{
    echo "<script>alert('can't contact');window.location='contact_us1.php'</script>";
}

 ?>
