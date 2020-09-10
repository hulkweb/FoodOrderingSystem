<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>login</title>
    <style type="text/css">
        #login_bar{
          width: 500px;
          background: black;
          padding: 10px;
        
          z-index: 12;
          display: none;
          color: yellow;
        
          border: 1px solid yellow;
    
        }
     #signup{
         display: none;
     }
     .btn{
         margin: auto;
         
     }
      </style>
</head>
<body>
    <div class="container" >
       
     
      <div class="container row" style="padding:20px; " id="customer-login">
     
        <div class="container col-sm-5 m-auto" style="background-color:rgb(250, 248, 248);color:rgb(17, 17, 14) ">
            <div class=" text-center text-primary display-4" style="font-family: fantasy;">customer Login</div>
           <div class=" p-3" style="font-family: cursive;font-size: 20px;color:rgb(2, 2, 2)">
                    <form method="post">
                       <div class="form-group p-3">
                             <label>Student Id</label>
                             <i class="fa fa-lock h3" ></i><input type="text" name="student_id" class="form-control">
                           </div>
                            <div class="form-group p-3">
                             <label>Password</label>
                             <i class="fa fa-lock h3" ></i><input type="password" name="login_pass" class="form-control">
                           </div>
                           
    
                                <div style="display: block;text-align: center;">
                                   <button type="submit" name="signin" class="btn btn-primary">Sign in</button>
                                </div>
                            
                           
                     </form>
                         <div style="display: block;text-align: left;">
                                   <button class="btn btn-success" onclick="display()">Sign up</button>
                         </div>
           </div>
        </div>
      </div>
    
    
    
    
      <div class="container row" style="padding:20px; " id="signup">
         
        <div class="container col-sm-8 m-auto" style="background-color:rgb(252, 236, 236);color:rgb(26, 26, 24) ">
            <div class=" text-center text-warning display-4" style="font-family: fantasy;">Customer Signup</div>
            <form method="post" enctype="multipart/form-data">
           <div class="row " style="font-family: cursive;font-size: 20px">
                <div class="col-sm-6">
                        <div class="form-group p-3">
                            <label>Fisrst Name</label>
                             <i class="fa fa-user h3" ></i><input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group p-3">
                            <label>Mobile No</label>
                             <i class="fa fa-envalope h3" ></i><input type="number" name="mobile" class="form-control">
                        </div>
                        
                           <div class="form-group p-3">
                            <label> Password</label>
                            <i class="fa fa-lock h3" ></i><input type="password" name="" class="form-control">
                          </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group p-3">
                        <label>Last Name</label>
                         <i class="fa fa-user h3" ></i><input type="text" name="last" class="form-control">
                    </div>
                    <div class="form-group p-3">
                        <label>Email</label>
                         <i class="fa fa-envalope h3" ></i><input type="email" name="email" class="form-control">
                    </div>
                    
                       <div class="form-group p-3">
                        <label>Repeat Password</label>
                        <i class="fa fa-lock h3" ></i><input type="password" name="pass" class="form-control">
                      </div>
              </div>
                <div style="display: block;text-align: center;">
                     <button type="submit" name="signup"  class="btn btn-primary btn-lg">Sign up</button>
                 </div>
                           
                   
              </div>
        </form>
        </div>
      </div>
      
      <?php 
     
      include 'connect.php';
      if (isset($_POST['signup'])) {
       $name=$_POST['name'];
       $email=$_POST['email'];
        $pass =$_POST['pass'];
       $mobile=$_POST['mobile'];

        
           
         
            $insert="INSERT INTO customer (name,email,password,reg_date,mobile) VALUES ('$name','$email','$pass',NOW(),'$mobile')";
            $run=mysqli_query($con,$insert);
    
           if ($run) {        
    echo "<script>alert('Registered succssfull!')</script>";
            echo "<script>alert('window.open('user_profile.php'))</script>";
    
           }
           else{
    echo "<script>alert('registration failed!')</script>";
    
            
           
           }
    
      }
    
    

    
    
    
    
        else if (isset($_POST['signin'])) {
      $sid=$_POST['student_id'];
    
        $pass =$_POST['login_pass'];
    
    $login_query="select *from student where student_id='$sid' and password='$pass'";
    $run_query=mysqli_query($con,$login_query);
    $num=mysqli_num_rows($run_query);
    if ($num>=1) {
        $_SESSION['sid']=$sid;
      
      echo "<script>alert('logged in');</script>";
            echo "<script>window.open('student.php')</script>";
    
       
    
    }
    else{
      echo "<script>alert('login details not appear correct!')</script>";
            echo "<script>alert('window.open('index.php'))</script>";
    
    }
    }
    
      ?>
    
  
      <script>
          function display() {
            document.getElementById('signup').style.display='block';
               document.getElementById('customer-login').style.display='none';
            
          }
      </script>
</body>
</html>