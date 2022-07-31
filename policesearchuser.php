<?php include 'policeheader.php'; 



?>



 <section class="about d-flex align-items-center text-light py-5" id="about"  style="background-attachment: fixed; height: auto;">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                	
<form method="post">
<br><br><br><br>

                    <h2>SEARCH USERS</h2>
                    <table>
                    	<tr><input type="text" name="fn"></tr>
                    	<tr>
                    		<input type="submit" name="search" value="SEARCH">
                    	</tr>
                    </table>
                   
      </form>
 <table class="table" style="width:300px;color:white">
	
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


                


               
</tr>
 <?php if (isset($_POST['search'])) {
                    	extract($_POST);
                    	$q="select * from users where first_name like '%$fn%' ";
                    	
                    }
                 else{    
$q="select * from users";}
$r=select($q);
foreach ($r as $row) {
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
		<td><a class="btn btn-warning" href="policeviewvehicledetails.php?userid=<?php echo $row['user_id'] ?>">view vehicle details</a></td>

		

	</tr>
<?php
}
 ?>
</table>
</div>
                <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down"> 
<!--                     <img class="img-fluid" src="./assets/images/about.jpg"style="size: 10px" alt="about" >
 -->                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of about -->


<br><br><br>



<?php include 'footer.php' ?>