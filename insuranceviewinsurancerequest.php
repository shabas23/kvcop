<?php include 'insuranceheader.php' ;

                $companyid=$_SESSION['companyid'];



?>
<br><br><br><br><br><br>


<h2 class="py-2">VIEW INSURANCE REQUEST</h2>
              </div>
<center>

            <div class="row gy-4" data-aos="zoom-in">
                <div class="col-lg-4">



		<table class="table" style="width: auto;color: black">
			<tr>
				<th>slno</th>
				<th>Insurance Name</th>
 				<th>Registration No.</th>
				<th>Request Date</th>
				<th>From Date</th>
				<th>To Date</th>
			</tr>
<?php 
$q="SELECT *  FROM `requestinsurance` INNER JOIN `insurance` USING (`insurance_id`)INNER JOIN `vehicles` USING(`vehicle_id`)";
$r=select($q);
$slno=1;
foreach ($r as $row) {
?>

			<tr>
				<td><?php echo $slno++; ?></td>
				<td><?php echo $row['insurance_name']; ?></td>
 				<td><?php echo $row['register_no']; ?></td>
				<td><?php echo $row['request_date']; ?></td>
				<td><?php echo $row['fromdate']; ?></td>
				<td><?php echo $row['todate']; ?></td>
				<td><a class="btn btn-danger" href="insuranceviewvehicledetail.php?vid=<?php echo $row['vehicle_id'] ?>">view vehicle details</a></td>


			</tr>




<?php
}

 ?>
		</table>
	</center>
</form>


</div></div>

<br><br><br><br><br><br><br><br>

<?php include 'footer.php' ?>