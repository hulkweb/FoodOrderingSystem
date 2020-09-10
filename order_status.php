<?php if (isset($_GET['order_status'])) {
	# code...
	include 'connect.php';
	$order_status=$_GET['order_status'];
	
		$order_status_query="SELECT * FROM orders where order_status='$order_status";
	     $run=mysqli_query($con,$order_status_query);
	     $i=1;
	     while ($order=mysqli_fetch_array($run)) {
	     	
	     	
	     	  $order_status=$order['order_status'];
                        $order_time=$order['order_time'];
                        $order_id=$order['order_id'];
                        $food_id=$order['foood_id'];
                       
	     
	     ?>

<div class="conatainer-fluid">
	<table class="table table-strippped table-responsive" >
		<thead><th>SN.</th><th>order no.</th><th>Order time</th><th>Check Details</th></thead>
		<tbody>
			<tr>
				<td>$i</td><td>$order_id</td><td>$order_time</td>
				<td><a href='watch_order.php?order_id=$order_id' class='btn btn-warning'>Watch</a></td>
			</tr>
			<?php echo "<tr>
				         <td>$i</td><td>$order_id</td><td>$order_time</td>
				       <td><a href='watch_order.php?order_id=$order_id' class='btn btn-warning'>Watch</a></td>
			           </tr>"; ?>
		</tbody>
	</table>
</div>
	     <?php
	 $i++;}
	
} ?>