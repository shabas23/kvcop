<?php include 'adminheader.php'; ?>
<br><br><br><br><br>

<h2 class="py-2">VIEW USERS PENALTY PAYMENT</h2>
              </div>

            <div class="row gy-4" data-aos="zoom-in">
                <div class="col-lg-4">

<table class="table" style="width: 500px">
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Punishmnent Type</th>
			<TH>Penality Amount</TH>
			<th>Date</th>
			<th>Status</th>
	 	</tr>
		<?php 
$q="SELECT * FROM `punishments` INNER JOIN  `punishment_types` USING (`punishment_type_id`) INNER JOIN `users` USING(`user_id`)INNER JOIN `payments` USING(`punishment_id`) 
";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>
	
	

<tr>
	<td><?php echo $row['first_name']; ?></td>
		<td><?php echo $row['last_name']; ?></td>
		
	<td><?php echo $row['punishment_type_name']; ?></td>
			<td><?php echo $row['amount']; ?></td>

	<td><?php echo $row['punishment_date'];?></td>
		<td><?php echo $row['punishment_status'];?></td>
		
	
</tr>

	 <?php 
}
	  ?>
	
</table></div></div>


<br><br><br><br><br><br><br><br><br><br>

<?php include 'footer.php' ?>