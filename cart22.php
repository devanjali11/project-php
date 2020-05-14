<?php
include('db_connect.php');
session_start();
$id=$_SESSION['ses_id'];
$data=mysqli_query($conn,"select * from product");

$a=mysqli_query($conn,"select * from cart where user_id='$id'");
$total=0;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="stylesheet1.css" media="screen"/>
  <script src="js/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   
	<title>cart</title>

</head>
<body>
	<script type="script1.js"></script>
	<script type="script1.json"></script>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="front2.php">Succulent Seeker</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><button  type="button" class="btn-primary" data-toggle="modal" data-target="#cart">Cart (<span class="total-count"></span>)</button></li>
      <li><button  class="clear-cart btn-primary ">Clear Cart</button></li>
      <li><a href="cart22.php"> Gallery</a></li>
      <li><a href="contact_us1.php"> Contact Us</a></li>
    </ul>
  </div>
</nav>
<!-- Main -->
<?php

while ($mm=mysqli_fetch_array($data)) 
{
  $p=$mm['image'];
  $d=$mm['price'];
  $s=$mm['desc'];
  $t=$mm['p_id'];
  

?>
<div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src=<?php echo $mm['image']?> alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title"><?php $mm['desc']?></h4>
    <p class="card-text"><?php echo $mm['price'] ?></p>
    <a href="cartlogic.php?pid=<?php echo $mm['p_id'] ?>" data-price="0.5" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
</div>
 </div>
 
<?php

}
?>

 <!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="show-cart table">
          
        </table>
        <?php 
        while($a1=mysqli_fetch_array($a))
{
    $total=$total+$a1['price'];
?>
        <div><?php echo $a1['product_name']; ?></div><?php echo $a1['price'] ?>
        <?php } ?>
        <div><span class="total-cart">Total Price: <?php echo $total; ?></span></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="checkoutform.php"><button type="button"  class="btn btn-primary">Order now</button></a>
      </div>
    </div>
  </div>
</div> 

</body>
</html>