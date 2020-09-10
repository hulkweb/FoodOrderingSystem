<div class="container" id="add_food">
            <p  class="p-2 text-center" style="width: 40%;font-size:30px; border-bottom: 1px solid blue;"> Add FOod</p>
             <form method="post"  enctype="multipart/form-data">
                      <div class="form-group" >
                         <label style="color: blue;font-size: 30px">Food Name</label>
                         <br>
                         <input type="text" name="name" class="form-control">
                      </div>
                      <div class="form-group" >
                         <label style="color: blue;font-size: 30px">Food des</label>
                         <br>
                         <input type="text" name="des" class="form-control">
                      </div>
                      <div class="form-group" >
                         <label style="color: blue;font-size: 30px">Food price</label>
                         <br>
                         <input type="text" name="price" class="form-control">
                      </div>
                      <div class="form-group" >
                         <label style="color: blue;font-size: 30px">Food Image</label>
                         <br>
                         <input type=file name="file" class="form-control">
                      </div>
                      <div class="form-group" >
                         <label style="color: blue;font-size: 30px">Food Category</label>
                         <br>
                          <select name="cat_name" class="form-control">
                               <?php $q="select * from category";  $run=mysqli_query($con,$q);
                                while ($row=mysqli_fetch_array($run)){ $uname=$row['cat_name'];  echo "<option>$uname</option>";  }  ?> 
                          </select>
                      </div>
                     <div class="form-group">
                            <label style="color: blue;font-size: 30px">Creation Date</label>
                            <br>
                            <input type="text" name="date" value="<?php echo date('l jS  F Y'); ?>" class="form-control">
                    </div>
                    <div style="display: block;">
                          <button class="btn btn-primary mt-3 allign-center" name="add">Add</button>
                    </div>
                    
              </form>
        </div>
     <?php  if (isset($_POST['add'])) {


             $file=$_FILES['file']['tmp_name'];
            $file_name=$_FILES['file']['name'];
             move_uploaded_file($file,"img/".$file_name
           );
             $name=$_POST['name'];
             $cat_name=$_POST['cat_name'];
              $des=$_POST['des'];
            $price=$_POST['price'];
              $add="INSERT into recipy(rec_name,rec_about,rec_cat,rec_image,gen_date,price) values('$name','$des','$cat_name','$file_name',NOW(),'$price')";
           $run=mysqli_query($con,$add) or die($con);
        if ($run) {
        echo "<script>alert('food has added succssfully!')</script>";
        echo "<script>alert('window.open('admin_profile.php'))</script>";
     exit();}
     else{echo "<script>alert('subject coudn't add!')</script>";}} ?>
  
 
                      
 