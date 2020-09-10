<?php session_start();
 
include 'connect.php';  ?>
<!DOCTYPE html>
<html lang="">
    <head>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home ||Shiv-Hotel </title>
        
        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            #food_search_box{
                padding: 10px 20px;
                width: 50%;
                margin: auto;
                
            }
            #food_search{
                box-shadow: none !important;
                outline: none !important;
                background-color:rgba(255,255,255,0.9);
                font-family: cursive;
                font-style: italic;

            }
            #search_btn{
                color: white;
                background-color: crimson;
                text-align: center;
                font-size: 19px;
                box-shadow: none !important;
                outline: none !important;
                width: 100%;
                height: 100%;

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
        </style>
    </head>
    <body>   <nav class="navbar navbar-expand-sm navbar-dark " style="background-color:rgba(69, 7, 151);font-family: cursive;" id="nav">
    <div class="container p-2">
       <a class="navbar-brand mr-auto" href="#"><i class="fa fa-heartbeat" aria-hidden="true" style="font-size: 40px;color:red;padding-bottom: 10px;"></i></a>
       <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
           aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i>      </button>
        
            <div class="collapse navbar-collapse ml-auto" id="collapsibleNavId" stylle="float:right">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"> <i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <i class="fa fa-user-secret" aria-hidden="true"></i> About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <i class="fas fa-creative-commons-nc-eu    "></i> Menu</a>
                    </li>
                   
                </ul>
                 <div class="nav-item ml-auto">
       <button type="button" class="btn btn-primary btn" data-toggle="modal" data-target="#modelId">
 <i class="fa fa-arrow-right fa" aria-hidden="true"></i> Login
</button>
       </div>
               
            </div>
           </div>
    
   </nav>



<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h2 class="modal-title text-center">User LogIn</h2>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            <div class="modal-body">
                <div class="container-fluid">
                     <div class=" p-3" style="font-family: cursive;font-size: 20px;color:rgb(2, 2, 2)">
                    <form method="post">
                       <div class="form-group p-3">
                             <label>User Id</label>
                            <input type="text" name="student_id" class="form-control" autocomplete="off" autofocus="on" required="">
                           </div>
                            <div class="form-group p-3">
                             <label>Password</label>
                             <input type="password" name="login_pass" class="form-control" autocomplete="off" required="">
                           </div>
                           
    
                                <div style="display: block;text-align: center;">
                                   <button type="submit" name="signin" class="btn btn-primary">Sign in</button>
                                </div>
                            
                           
                     </form>
                         
           </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="login.php" class="btn btn-danger btn-lg">
                    SignUp
                </a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               
            </div>
        </div>
    </div>
</div>

<script>
    $('#exampleModal').on('show.bs.modal', event => {
        var button = $(event.relatedTarget);
        var modal = $(this);
        // Use above variables to manipulate the DOM
        
    });
</script>
 <?php  

 if (isset($_POST['signin'])) {
      $sid=$_POST['student_id'];
    
        $pass =$_POST['login_pass'];
    
    $login_query="select *from customer where id='$sid' and password='$pass'";
    $run_query=mysqli_query($con,$login_query);
    $num=mysqli_num_rows($run_query);
    if ($num>=1) {
        $_SESSION['customer_id']=$sid;
      
      echo "<script>alert('logged in');</script>";
            echo "<script>window.open('user-profile.php')</script>";
    
       
    
    }
    else{
      echo "<script>alert('login details not appear correct!')</script>";
            echo "<script>alert('window.open('index.php'))</script>";
    
    }
     
 
    }
    else{
      
    }
     ?>
     <!-- ********************************** ENd logi ********************************** -->
        <div class="container-fluid" id="outer">
           
          
            
                       <div class="container-fluid p-2" id="main">
                               <div class="image p-0 m-0 w-100">
                                  <div class="img-fluid   inner-img m-0 col-xs-12"><img src="k2.jpeg"  alt="" class="img-fluid" width="600px" height="500px"></div>
                                   <div class="Text_lare">
                                   
                                     <p id="type"></p>
                                     <div class="container">
                                         <form action="">
                                             <div class="row" id="food_search_box">
                                                 <div class="col-sm-10">
                                                    <input type="text" name="food_search" id="food_search" class="form-control" placeholder="Search by foodname" required>
         
                                                 </div>
                                                 <div  class="col-sm-2">
                                                   
                                                    <button type="submit" class="btn btn-danger ">Search</button>
                                                 </div>
                                                 
                                                
                                             </div>
                                         </form>
                                     </div>
                                   </div>

                               </div>
                            
        <br>
        <br>
   <div class="container" id="foods_menu">
       <h2>Popular this month in your city</h2>
       <h4>easist way to get food</h4>
       <!-- <p class="recipy" onmousemove="mouse()"></p> -->
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

            <div class="col-sm-4 col-12">
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
                         <div style="width: 70%;"><a href="food-one.php?id=<?php echo $id ; ?>" class="btn btn-light btn-lg "  id="order-button">Order Now</a></div>
                     </div>
                     
                    
                </div>
            </div>
          <?php } ?>
            
        </div>
    </div>



    <!-- ########################## FOOOTER ######################################### -->
    <footer class="container-fluid text-light d-block">
         
        <div class="container" >

            <div class="row">
                <div class="col-sm-6 col-md-3 col-xs-12 seg-1">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus rerum soluta aliqui</p>
                </div>
                <div class="col-sm-3 col-sm-6 col-md-3 col-xs-12 seg-2">
                    <h2>Important Links</h2>
                    <ul>
                        <li><a href=""></a>Events</li>
                        <li><a href=""></a>Support</li>
                        <li><a href=""></a>Hosting</li>
                        <li><a href=""></a>Career</li>
                        <li><a href=""></a>Blogs</li>
                    </ul>
                </div>
                <div class="col-sm-3 col-sm-6 col-md-3 col-xs-12 seg-3">
                    <h2>Follow Us</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In deleniti nihil laboru</p>
                    <div  class="d-flex " style="font-size: 26px;padding: 13px 2px;" >
                        
                        <i class="fa fa-facebook " aria-hidden="true" style="margin:20px ;"></i>
                        <i class="fa fa-twitter" aria-hidden="true" style="margin: 20px;"></i>
                        <i class="fa fa-instagram" aria-hidden="true" style="margin: 20px;"></i>
                        <i class="fa fa-linkedin" aria-hidden="true" style="margin: 20px;"></i>
                     </div>
                 </div>
                <div class="col-sm-3 col-sm-6 col-md-3 col-xs-12 seg-4">
                    <h2>Contact Us</h2>
                   
                        <form action="">
                            <div style="display: flex;margin-top: 20px;">
                            <input type="text" class="form-control">
                            <button class="" >Subscribe</button>
                        </div>
                        </form>

                    
                    
                </div>
            </div>
               
           
        </div>
          <div class="bottom">Copyright <i class="fa fa-copyright" aria-hidden="true"> 2020 powered By rahuls_Web</i></div>
    </footer>
   
        <script src="index.js"></script>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="jquery.3.4.1.js"></script>
     <script src="script.js"></script>

        <script>        
let text="We Create Awsome foods";
let i=0;
setTimeout(setInterval(load, 100),2000);
function load() {
 if (i<text.length) {
  document.getElementById('type').innerHTML+=text.charAt(i);
   
  i++;
  
 }
   
}
const width =50;

let w=0;
setInterval(widthm,100);
function widthm() {
    if (w<widthm) {
        document.getElementById('1').style.width += w+'px';
    }
 
    w++;
}
let a =window.scrollY;

if (a>10)  {
    document.getElementById('nav').style.backgroundColor='rgba(69, 7, 151,0.8)';
    document.getElementById('nav').style.position='sticky';
}
function mouse() {
    document.querySelector('.ro').style.backgroundColor='lightgrey';
}
        </script>
   
    </body>
</html>
