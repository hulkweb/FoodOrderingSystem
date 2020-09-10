<div class="container" id="add_food_cat">
          <p  class="p-2 text-center" style="width: 40%;font-size:30px; border-bottom: 1px solid blue;">add Category </p>
             <form method="post" >
                      <div class="form-group" >
                         <label style="color: blue;font-size: 30px">Category Name</label>
                         <br>
                         <input type="text" name="name" class="form-control">
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
             $name=$_POST['name'];
              $add="INSERT into category (id,cat_name,gen_date) values(1,'$name',NOW())";
           $run=mysqli_query($con,$add) or die($con);
        if ($run) {
        echo "<script>alert('category has added succssfully!')</script>";
        echo "<script>alert('window.open('admin_profile.php'))</script>";
     exit();}
     else{echo "<script>alert('subject coudn't add!')</script>";}} ?>
  
 
