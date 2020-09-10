
 <?php session_start();
 include 'connect.php';
      
 
 
      // $q="select * from admin ";
      // $run=mysqli_query($con,$q);
      // $row=mysqli_fetch_array($run);
      // $name=$row['name'];
 ?>
 
  
 <!DOCTYPE html>
 <html>
 <head>	
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
     <meta http-equiv="X-UAC-compatible" content="ie=edge">
     <link rel="stylesheet" href="index.css">
     <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title></title>
    <style type="text/css">
       .row{
          margin: 0;
          padding: 0;
                 background-image: linear-gradient(80deg, #FAEBD7,#D3D3D3);
                 min-height: 700px;
       }  
       .sb1{
          background-image: linear-gradient(80deg, #FAEBD7,#D3D3D3);
          padding:0px;
          text-align: center;
          border-right:2px solid blue;
          height: auto; 
       }
         .sb1 > .head >.button{
             text-align: center;
         }
          .sb1 > .head p{
             padding: 10px;
             color: chartreuse;
          }
       .sb1 > .head{
          font-size: 20px;
          text-align: center;
          background-image: linear-gradient(45deg,rgb(58, 15, 87),rgb(19, 3, 31));
          color:black;
          text-transform: uppercase;
          margin: 0;
          font-family: fantasy;
          padding: 0;
          display: block;
       }
       .sb2{
          margin: 0;
          padding: 0;
        
       }
 .sb2  .head{
          font-size: 20px;
          text-align: center;
         background-image: linear-gradient(45deg,rgb(58, 15, 87),rgb(19, 3, 31));
          color:black;
          text-transform: uppercase;
          margin: 0;
          font-family: sans-serif;
          
          width: 100%;
          height: 50px;
          display: block;
 
       }
        
       .sb2  .head .button .hover{
          display: inline-block;
             float: right;
              padding-left: 100px; 
             transition: 2s ease;
 
       }
         i:hover > .hover{
             display: block;
         }
         .sb1> .dash>ul li {
            padding: 10px;
            color:   #000;
            font-size: 17px;
       text-decoration: none;
       text-transform: uppercase;
       font-family: sans-serif;
 
 
         }
          .sb1> .dash>ul li a:hover{
            padding: 10px;
            color:  #2F4F4F ;
            font-size: 17px;
       text-decoration: none;
       text-transform: uppercase;
       background-color: #fff;
 
       }
 
         li{
            list-style-type: none;
         }
         .header{
            padding: 0;
            margin: 0;
         }
         .sb2> .head >.button{
             display: inline-block;
          
             padding: 10px;
         }
         li{
            background-color: #fff;
            color: black;
            padding: 10px;
           text-align: left;

         }
         a{
            color:black;
            float: none;;

         }
         a:hover{
            color:black;
            float: none;
         }
         #sublist{
            display: none;
         }
         #list > li:hover > #sublist{
            display: block;
         }
         .container{
          min-height: 300px;
         }
/*
         #Dashboard{
            display: none;
         }
         #reg_user{
          display: none;
         }
         #manage_food_cat{
          display: none;
         }
    #add_food_cat{
          display: none;
         }*/
    </style>
 </head>
 <body>

      <div class="header container-fluid">
             <div class="row">
                  <div class="col-sm-3 sb1">
                     <div class="head text-center">
                        <div style="background-color: black;margin: auto; border-radius: 50%;border:2px solid blanchedalmond;height: 100px;width: 100px;"></div>
                        
                        <div class="dropdown open">
                           <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                 aria-expanded="false">
                                 Admin Dashboard
                                 
                                 </button>
                           <div class="dropdown-menu" aria-labelledby="triggerId">
                              <button class="dropdown-item" href="#" onclick="admin_profile()">profile</button>
                              <button class="dropdown-item " href="#" onclick="admin_setting()" >setting</button>
                              <button class="dropdown-item " href="#" onclick="">password</button>
                           </div>
                        </div>
                     </div>
                     <div class="dash">
                        <ul id="list">
                           <li><a href='admin_profile.php?n=1' class="btn btn" >Dashboard</a></li>
                           <li><a href='admin_profile.php?n=2' class="btn btn">register user</a></li>
                           <li>food category 
                                <ul id="sublist">
                                   <li><a href='admin_profile.php?n=3' class="btn b"  > add Food_category</a></li>
                                   <li id="Food_category"><a href='admin_profile.php?n=4' class="btn" >Food_category</a></li>
                                </ul>
                           </li>
                           <li>food menu 
                              <ul id="sublist">
                                 <li><a href="admin_profile.php?n=5"> Add Food </a></li>
                                 <li><a href="admin_profile.php?n=6">manage Food </a></li>
                              </ul>
                           </li>
                           <li>orderes 
                              <ul id="sublist">
                                 <li><a href="admin_profile.php?order_status=pending&&n=9">Not confermed yet</a></li>
                                 <li><a href="admin_profile.php?n=10">order confiremed</a></li>
                                 <li><a href="">oderedre delivered</a></li>
                              </ul>
                           </li>
                           
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-9 sb2">
                       <div class="head">
                       
                          <div class="button">
   
                                 <span style="color: blue;font-family: fantasy;font-size: 15px;padding: 10px;float: left;">hey !
                                </span>
                                <div class="hover">
                                 <a style="margin: 10px;" href="index.html"><i class="fa fa-sign-out" style="font-size:25px;color:red"></i></a>
                                  <a style="margin: 10px;" href=" https://wa.me/<+91>"><i class="fa fa-user" style="font-size:25px;color:black"></i></a>
                                </div>  
                                   
                          </div>
                       </div>
                       <?php
                 if (isset($_GET['n'])) {
 
             $name=$_GET['n'];
            switch ($name) {
                case 1:
                    include 'main-menu.php';
                    break;
            case 2:
                    include 'manage_customer.php';
                    break;
               case 3:
                    include 'add_food_cat.php';
                    break;
             case 4:
                    include 'manage_food_cat.php';
                    break;
                case 5:
                    include 'add_food.php';
                    break;
              case 6:

                    include 'manage_food.php';
                    break;
            case 7:
                    include 'merge_attendeance.php';
                    break;
                 case 8:
                    include 'merge_material.php';
                    break;
               case 9:
                    include 'order_status.php';
                    break;
                case 10:
                    include 'manage_order.php';
                    break;
                 case 11:
                    include 'merge_all_vid.php';
                    break;
                default:
                    include 'index.php';
                    break;
            }
             
            
             }
             ?>   
 <!-- ###################### ###################### daaashhhhbbooooaarrrdddd###################### -->

<!-- ###################### ###################### reg user ###################### -->

         


              <!-- ###################### ###################### manage food category ###################### -->
      

             <!-- ###################### ###################### manage food category ###################### -->


    
               <!-- ###################### ###################### add  food  ###################### -->
        


 
                       
                </div>  <!-- col-sm-8 -->
  
           </div>  <!-- row -->
      </div>  <!--  container -->
      <script src="admin.js" ></script>
 </body>
 </html>
 