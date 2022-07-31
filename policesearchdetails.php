<?php include 'policeheader.php'; 
$l="";
?>



 <section class="about d-flex align-items-center text-light py-5" id="about"  style="background-attachment: fixed; height: auto;">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                	

<br><br><br><br>
<h1>Search Details</h1>

<?php  

if (isset($_POST['search'])) {
	extract($_POST);

	if ($l=='lno') {
		# code...
                    	$q="select * from users where license_no like '%$ln%' ";
	}
	elseif ($l=='rc') {
                    	$q="select * from vehicles where register_no like '%$ln%' ";
	}
	$res=select($q);

	# code...
}


?>

<?php 
if($l=='lno')
{
 ?>
<!-- ////////userss -->

<table class="table" style="width:300px;color: white">
	
<tr>
				<th>FirstName</th>

				<th>LastName</th>
				 <th> Latitude</th>

				<th>Longitude</th>
				<th>Place</th>

				<th>Pincode</th>
				<th>House Name</th>
<th>Gender</th>
                <th>Date Of Birth</th>

				<th>Image </th>

				<th>Phone</th>

				<th>Email</th>
				<th>License no</th>


                


               
</tr>
<?php 

// $q="select * from users";
// $r=select($q);
foreach ($res as $row) {
	?>
	<tr>
		<td><?php echo $row['first_name']; ?></td>
		<td><?php echo $row['last_name']; ?></td>
		<td><?php echo $row['latitude']; ?></td>
		<td><?php echo $row['longitude']; ?></td>
				<td><?php echo $row['place']; ?></td>

		<td><?php echo $row['pincode']; ?></td>
				<td><?php echo $row['house_name']; ?></td>
		<td><?php echo $row['gender']; ?></td>
		<td><?php echo $row['dob']; ?></td>
		<td><img src="<?php echo $row['photo']; ?> "height="100" ></td>

		<td><?php echo $row['phone']; ?></td>
		<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['license_no']; ?></td>


	

	</tr>
<?php
}
 ?>
</table>

 <?php
} 
elseif($l=='rc')
{
?>
<!-- /////////vehicles -->

<table class="table" style="width: 500px;color: white">
	
<tr>

                                <th> Register_No</th>

                                <th>Manufacture_Year</th>

                                <th>Brand</th>
                                <th>Model</th>

</tr>
<?php 

foreach ($res as $row) {
	?>
	<tr>
		<td><?php echo $row['register_no']; ?></td>
		<td><?php echo $row['manufacture_year']; ?></td>
		<td><?php echo $row['model']; ?></td>
		<td><?php echo $row['brand']; ?></td>
		 

	</tr>
<?php
}
 ?>
</table>
 

<?php
}
else{
	?>

	

<form method="POST">
	<table class="table" style="width: 500px;color: white">
	

		<tr>
			<td><input type="radio" name="l" value="lno">license number
				<input type="radio" name="l" value="rc">RC number
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="ln">
				<input type="submit" name="search" value="SEARCH">
			</td>
		</tr>
		
	</table>
</form>
<?php } ?>
</div>
                <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down"> 
<!--                     <img class="img-fluid" src="./assets/images/about.jpg"style="size: 10px" alt="about" >
 -->                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of about -->


<br><br><br>



<?php include 'footer.php' ?>