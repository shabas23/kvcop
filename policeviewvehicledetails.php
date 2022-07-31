<?php include 'policeheader.php'; 
extract($_GET);


?>






<!-- About -->
    <section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right"><br><br><br><br>


 <form method="post">
<br><br><br><br>

 <h2>SEARCH VEHICLE INFORMATION</h2>
                    <table>
                        <tr><input type="text" name="rn"></tr>
                        <tr>
                            <input type="submit" name="search" value="SEARCH">
                        </tr>
                    </table>
                   
      </form>

            
<table class="table" style="width: 500px;color: white">
	
<tr>

                                <th> Register_No</th>

                                <th>Manufacture_Year</th>

                                <th>Brand</th>
                                <th>Model</th>

</tr>
<?php 
if (isset($_POST['search'])) {
    extract($_POST);
    $q="SELECT * from vehicles where register_no like '%$rn%' ";
}


else{
$q="SELECT * FROM vehicles INNER JOIN `users` USING(`user_id`) WHERE user_id='$userid'";}
$r=select($q);
foreach ($r as $row) {
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
   </div>
                <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down"> 
                    <img class="img-fluid" src="./assets/images/about.jpg" alt="about" >
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!

<br><br><br>
<?php include 'footer.php' ?>

