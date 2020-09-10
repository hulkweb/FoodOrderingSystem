<?php 
include 'connect.php';
if (isset($_GET['order_id'])) {
	
	$order_id=$_GET['order_id'];

$delte="DELETE FROM orders where order_id='$order_id'" ;
 $run=mysqli_query($con,$delte) or die($con);
       if ($run) {
        echo "<script>alert('order has deleted succssfully!')</script>";
        echo "<script>alert('window.open('user_profile.php'))</script>";
     exit();}
     else{echo "<script>alert('subject coudn't add!')</script>";}
}
 ?>