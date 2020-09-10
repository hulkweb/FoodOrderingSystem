 <?php  if (isset($_POST['order'])) {

          $order_id=rand(11111,99999);
        $food_id=$_POST['food_id'];

             
           
         
             
              $add="INSERT into orders(order_id,user_id,order_time) values('$order_id','$cust_id',NOW())";
           $run=mysqli_query($con,$add) or die($con);
        if ($run) {
        echo "<script>alert('food has added succssfully in your cart!')</script>";
        echo "<script>alert('window.open('user_profile.php'))</script>";
     exit();}
     else{echo "<script>alert('food  coudn't add!')</script>";}} ?>
          <?php } ?>
            