<div class="container" style="height: 1000px;" >
         <p  class="p-2 text-center" style="width: 40%;font-size:30px; border-bottom: 1px solid blue;">Our Customerss</p>
        <div class="table-responsive">
          <table class='table table-bordered  text-center text-primary bg-white' style="font-size: 15px">
              <thead> 
                <th>no.</th><th>customer's name</th><th>Email</th><th>mobile</th><th>REg date</th><th>update/delete</th>
             </thead>
             <tbody>
              <?php $q="select * from customer";
                    $run=mysqli_query($con,$q);
                    while ($row=mysqli_fetch_array($run)){
                        $uname=$row['name'];
                        $id=$row['id'];
                       $gender=$row['reg_date'];
                       $contact=$row['mobile'];
                       $email =$row['email'];
                      echo " <tr> <td>$id</td><td>$uname</td><td>$email</td> <td>$contact</td><td>$gender</td>
                      <td><a href='stupdate.php?uname=' class='btn btn-primary' style='text-decoration: none;'>update</a></td></tr>";  }
              ?> 
            </tbody>
          </table>
        </div>
</div>