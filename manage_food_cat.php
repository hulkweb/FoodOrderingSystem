<div id="manage_food_cat" class="container">
          <p  class="p-2 text-center" style="width: 40%;font-size:30px; border-bottom: 1px solid blue;">FOod Category</p>
          <div class="table-responsive">
            <table class='table table-bordered  text-center text-primary bg-white' style="font-size: 15px">
              <thead> 
                <th>no.</th><th>Category name</th><th>REg date</th><th>update/delete</th>
             </thead>
             <tbody>
              <?php $q="select * from category";
                    $run=mysqli_query($con,$q);
                    while ($row=mysqli_fetch_array($run)){
                        $uname=$row['cat_name'];
                        $id=$row['id'];
                       $gender=$row['gen_date'];
                      
                      echo " <tr> <td>$id</td><td>$uname</td><td>$gender</td>
                      <td><a href='stupdate.php' class='btn btn-primary' style='text-decoration: none;'>update</a></td></tr>";  }
              ?> 
            </tbody>
          </table>
        </div>  
    </div>

