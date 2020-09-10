<!DOCTYPE html>
<html lfood-one>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="bootstrap.min.css">

    <title>food-one</title>
    <style>
        #top-bar{
            background-image: url('img/uthappizza.png')/* linear-gradient(45deg,rgba(255,0,0,0.5),rgba(0,255,0,0.4))*/;
            background-repeat: no-repeat;
            background-size: cover;
        }
        #top-bar h3{
            background-color: rgba(255,255,255,0.3);
             color: #000;
             padding: 10px;
    } 
    #top-bar img{
        border: 3px solid white;
    }
    #main-part .card h4{
                text-align: center;
                font-family: serif;
                padding: 10px;
                font-size: 25px;
            }
 #main-part     h2{
                text-align: left;
                font-family: serif;
                padding: 10px;
                text-align: center;
                text-transform: uppercase;
            }
     #main-part .card p{
               color: grey;
               text-align: left;
               font-size: 17px;
               font-family: serif;
            }
    #order-button{
                border: 3px dotted #ff1100 !important; 
                float: right;
                width: 40%;
                margin: auto;
            }
            
    </style>
</head>

<body>
    <?php  
    include 'header.html';
    include 'connect.php';
     if (isset($_GET['id'])) {
        $food_id=$_GET['id'];

         $q="select * from recipy where id='$food_id'";
           $run=mysqli_query($con,$q) or die($con);
           while ($row=mysqli_fetch_array($run)) {
                $Recipy_name=$row['rec_name'];
                        $Recipy_price=$row['price'];
                        $rec_about=$row['rec_about'];
                        $Recipy_pic=$row['rec_image'];
                        $id=$row['id'];
                     
           }
     }
       
    ?>
    <div class="container-fluid" id="top-bar">
        <div class="col-sm-4"  style="display: flex;height: 200px;padding: 10px;">
             
                <div style="height: 190px;">
                     <img src="<?php echo 'img/'.$Recipy_pic ; ?>" alt="" class="" height="150px">
                </div>
           
              <div style="width:40%;padding: 20px 10px;">
                 <h3><?php echo $Recipy_name ; ?></h3>
              </div>
        </div>
    </div>
    <br>
    <div class="container" id="main-part">

        <div class="breadcrumb nav p-2">
            <div class="breadcrumb-item">
               <a href="index.php" class="">Home</a>
             </div>
             <div class="breadcrumb-item">
            <a href="index.php" class="">menu</a>
             </div>
             
        </div>
        <div class="row">
            <div class="col-sm-8 card">
                <div class="row ">
                    <div class="col-sm-4 text-center p-2">
                        <img src="<?php echo 'img/'.$Recipy_pic ; ?>" alt="" height="200px">
                    </div>
                    <div class="col-sm-8">
                        <h2><?php echo $Recipy_name ; ?></h2>
                        <p><?php echo $rec_about ; ?></p>
                    </div>
                </div>
            </div>
                <div class="col-sm-4 card ">
                    <h4>TOTal</h3>
                    <h2>rs. <?php echo $Recipy_price ; ?></h1>
                    <br>
                    <a href="" class="btn btn-danger btn-lg "  id="order-button">CHECKOUT</a>

                </div>
            </div>
        </div>
    </div>

    
</body>
</html>