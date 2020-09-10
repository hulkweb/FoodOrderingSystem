<?php 
session_start();
if (isset($_SESSION['customer_id'])) {
          $cust_id=$_SESSION['customer_id'];

   # code...
 }
 else{
  header('index.php');
 } ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Food-Menu || Shiv-Hotel</title>
  <style>
#categories{
    padding: 10px;
}
  .list-head{
         background-color: crimson;
         color: white;
         padding: 5px;
         font-size: 20px;
         text-align: center;
         list-style-type: none;
         text-transform: capitalize;
         font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
         border: 1px solid balck;
  }
  .list-item {
         background-color: rgb(250, 248, 248);
         color: rgb(10, 9, 9);
         padding: 5px;
         font-size: 18px;
         text-transform: capitalize;
         text-align: center;
         list-style-type: none;
         font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
         border: 1px solid balck;
         border-radius: 5px;
  }
  .list-item a{
      text-decoration: none;
  }
  .list-item a:hover{
    text-decoration: none;
  }
  .list-item:hover{
      background-color: violet;
  }
  #ul{
   display: inline-flex;

    overflow-x: scroll;


  }
  .card{
    margin: 10px;
  }
      #foods_menu h2,h4{
                      font-family: serif;
                      text-transform: capitalize;
                      color: black;
                      text-align: center;
                      padding: 10px;
            }
             #foods_menu  .card{
                min-height: 400px;
                margin: 10px;
             }
            #foods_menu  .card h4{
                text-align: left;
                font-family: serif;
                padding: 10px;


            }
            #foods_menu  .card p{
               color: grey;
               text-align: left;
               font-size: 17px;
               font-family: serif;
            }
            #order-button{
                border: 3px dotted #ff1100 !important; 
                float: right;
            }
  .search-bar{
  font-style: 19px;}
  p{
    font-size: 17px;
    padding: 10px;
  }
  </style>
</head>
<body>
  <?php 
  include 'user-header.html'; 






   if (isset($_GET['cust_id'])) {
$cust_id=$_GET['cust_id'];
} ?>
    <div class="container">
       
            
                <div class="container" id="results">
                  <ul id="ul">

                    <li class="list-item"><a href="">Thai</a></li>
                    <li class="list-item"><a href="">Italian</a></li>
                    <li class="list-item"><a href="">Mashroom</a></li>
                    <li class="list-item"><a href="">Gujratiai</a></li>
                    <li class="list-item"><a href="">chinese</a></li>


                </ul>
              </div>
                    <div class="row">
              <?php 
           include 'connect.php';
              $q="select * from recipy";
                    $run=mysqli_query($con,$q);
                    while ($row=mysqli_fetch_array($run)){
                        $Recipy_name=$row['rec_name'];
                        $Recipy_price=$row['price'];
                        $rec_about=$row['rec_about'];
                        $Recipy_pic=$row['rec_image'];
                        $id=$row['id'];
                     
                        
              ?> 

            <div class="col-sm-4 col-10 m-auto">
                <div class="card shadow ">
                     <div style="height: auto;width: 100%;text-align: center;">
                        <img src="<?php echo 'img/'.$Recipy_pic ; ?>" alt="<?php echo $Recipy_pic ; ?>" height="200px" class="" >
                     </div>
                     <div style="padding: 10px;">
                        <a href=""><h4><?php echo $Recipy_name ; ?></h3></a> 
                        <p><?php echo $rec_about; ?> </p>
                     </div>
                     <div style="display:flex;width: 100%;padding: 0px 10px;">
                         <div style="width: 30%;"> <h4 >Rs.<?php echo $Recipy_price ; ?></h4></div>
                         <div style="width: 70%;">
                          <form method="post">
                            <input type="hidden" name="food_id" value="<?php echo $id ; ?>">
 
                            <button type="submit" name="order"  class="btn btn-light btn-lg "  id="order-button">Order Now</button>
                          </form>
                         </div>
                     </div>
                     
                    
                </div>
            </div>
             <?php  if (isset($_POST['order'])) {

          $order_id=rand(11111,99999);
        $food_id=$_POST['food_id'];

             
           
         
             
              $add="INSERT into orders(order_id,user_id,order_time,foood_id) values('$order_id','$cust_id',NOW(),'$food_id')";
           $run=mysqli_query($con,$add) or die($con);
        if ($run) {
        echo "<script>alert('food has added succssfully in your cart!')</script>";
        echo "<script>alert('window.open('user_profile.php'))</script>";
     exit();}
     else{echo "<script>alert('food  coudn't add!')</script>";}} ?>
          <?php } ?>
            
        </div>
    </div>

                  
           
</body>
</html>