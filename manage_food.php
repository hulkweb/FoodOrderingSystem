    <!-- ###################### ###################### manage food  ###################### -->


    <div id="manage_food" class="container">
          <p  class="p-2 text-center" style="width: 40%;font-size:30px; border-bottom: 1px solid blue;">manage food</p>
          <div class="table-responsive">
            <table class='table table-bordered  text-center text-primary bg-white' style="font-size: 15px">
              <thead> 
                <th>no.</th><th>product name</th><th>price</th><th>REg date</th><th>update/delete</th>
             </thead>
             <tbody>
              <?php $q="select * from recipy";
                    $run=mysqli_query($con,$q);
                    while ($row=mysqli_fetch_array($run)){
                        $uname=$row['rec_name'];
                        $price=$row['price'];
                        $id=$row['id'];
                       $gender=$row['gen_date'];
                      
                      echo " <tr> <td>$id</td><td>$uname</td><td>$price</td><td>$gender</td>
                      <td><a href='stupdate.php?uname=' class='btn btn-primary' style='text-decoration: none;'>update</a></td></tr>";  }
              ?> 
            </tbody>
          </table>
        </div>  
    </div>
