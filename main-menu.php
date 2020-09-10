<div class="row">
    <div class="col-sm-4 p-4">
        <div style="border: 1px solid black;height: 200px;text-align: center;">
          <p class="order">Total Order</p>
          <?php 
          include 'connect.php';
            $total_order="SELECT * FROM orders";
            $run_total=mysqli_query($con,$total_order);
            $num_orders=mysqli_num_rows($run_total);
            echo "<h1 class='text-center text-dark'>$num_orders</h1>";           ?>
        </div>
    </div>
    <div class="col-sm-4 p-4">
        <div style="border: 1px solid black;height: 200px;text-align: center;">
          <p class="order">Total Order</p>
        </div>
    </div>
    <div class="col-sm-4 p-4">
        <div style="border: 1px solid black;height: 200px;text-align: center;">
          <p class="order">Total Order</p>
        </div>
    </div>
    <div class="col-sm-4 p-4">
        <div style="border: 1px solid black;height: 200px;text-align: center;">
          <p class="order">Total Order</p>
        </div>
    </div>
    <div class="col-sm-4 p-4">
        <div style="border: 1px solid black;height: 200px;text-align: center;">
          <p class="order">Total Order</p>
        </div>
    </div>
    <div class="col-sm-4 p-4">
        <div style="border: 1px solid black;height: 200px;text-align: center;">
          <p class="order">Total Order</p>
        </div>
    </div>
    <div class="col-sm-4 p-4">
        <div style="border: 1px solid black;height: 200px;text-align: center;">
            
          <p class="order">Total Order</p>
        </div>
    </div>
</div>