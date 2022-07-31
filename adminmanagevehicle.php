<?php include 'adminheader.php'; 
extract($_GET);

if (isset($_POST['register'])) {
    extract($_POST);
    $q="INSERT INTO vehicles VALUES(NULL,'$userid','$rn','$my','$b','$m') ";
    $r=INSERT($q);
    alert("added successfully");
    return redirect("adminmanagevehicle.php");
}

if (isset($_GET['did']))
{
	extract($_GET);
	$qd="delete from vehicles where vehicle_id='$did'";
	$rd=delete($qd);
	alert("deleted");
	return redirect("adminmanagevehicle.php");
}
if (isset($_GET['uid']))
{
	extract($_GET);
	$qs="select * from vehicles where vehicle_id='$uid'";
	$rs=select($qs);
	
}
if (isset($_POST['update']))
{
	extract($_POST);
	$qu="UPDATE  vehicles SET `register_no`='$rn',manufacture_year='$my',brand='$b',model='$m' WHERE vehicle_id='$uid'";
	 $ru=update($qu);
	 alert("updated");
  return redirect("adminmanagevehicle.php");
}



?>


<?php 
if (isset($_GET['uid'])) {
	?>

 <section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right"><br><br><br><br>

                    <h2>UPDATE MANAGE VEHICLE INFORMATION</h2>
                          <form method="POST">
    <center>
                                    <h2 style="font-size: 70px;"></h2>
        <table class="table" style="width:500px;color: green">
                  <tr>
                                <th> Register_No</th>
                                <td><input type="text" name="rn" required class="form-control" value="<?php echo $rs[0]['register_no'] ?>"
></td>
                            </tr>
                            <tr>
                                <th>Manufacture_Year</th>
                                <td><input type="text" name="my" required class="form-control" value="<?php echo $rs[0]['manufacture_year'] ?>"
></td>
                            </tr>
                            <tr>
                                <th>Brand</th>
                                <td><input type="text" name="b"  required class="form-control" value="<?php echo $rs[0]['brand'] ?>"
></td>
                            </tr>
                            <tr>
                                <th>Model</th>
                                <td><input type="text" name="m"  required class="form-control" value="<?php echo $rs[0]['model'] ?>"
></td>
                            </tr>
             
            <tr>
                <td align="center" colspan="2"><input type="submit" name="update" value="UPDATE" class="btn btn-success"></td>
            </tr>
        </table>
    </center>
</form>      
                    </div>
                <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down"> 
                    <img class="img-fluid" src="./assets/images/about.jpg" alt="about" >
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of about -->




<?php
}
else
{
 ?>




<!-- About -->
    <section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right"><br><br><br><br>

                    <h2>MANAGE VEHICLE INFORMATION</h2>
                          <form method="POST">
    <center>
                                    <h2 style="font-size: 70px;"></h2>

        <table class="table" style="width:500px;color: green">
                <tr>
                                <th> Register_No</th>
                                <td><input type="text" name="rn" required class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Manufacture_Year</th>
                                <td><input type="text" name="my" required class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Brand</th>
                                <td><input type="text" name="b"  required class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Model</th>
                                <td><input type="text" name="m"  required class="form-control"></td>
                            </tr>
                           
            <tr>
                <td align="center" colspan="2"><input type="submit" name="register" value="ADD" class="btn btn-success"></td>
            </tr>
        </table>
    </center>
</form>      
                    </div>
                <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down"> 
                    <img class="img-fluid" src="./assets/images/about.jpg" alt="about" >
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of about -->

<?php 
}
 ?>
    <!-- Plans -->
<!--     <section class="plans d-flex align-items-center py-5" id="plans">
 --><!--         <div class="container text-light" >
<!--  --><!--                 <p>OUR PLANS</p>
 -->                <h2 class="py-2">VIEW VEHICLE INFORMATION</h2>
              </div>

            <div class="row gy-4" data-aos="zoom-in">
                <div class="col-lg-4">

<table class="table" style="width: 500px">
	
<tr>

                                <th> Register_No</th>

                                <th>Manufacture_Year</th>

                                <th>Brand</th>
                                <th>Model</th>

</tr>
<?php 
$q="select * from vehicles";
$r=select($q);
foreach ($r as $row) {
	?>
	<tr>
		<td><?php echo $row['register_no']; ?></td>
		<td><?php echo $row['manufacture_year']; ?></td>
		<td><?php echo $row['model']; ?></td>
		<td><?php echo $row['brand']; ?></td>
		  <td><a class="btn btn-success" href="?uid=<?php echo $row ['vehicle_id']?>">update</a></td>
  <td><a class="btn btn-danger" href="?did=<?php echo $row['vehicle_id']?>">delete</a></td>
    <td><a class="btn btn-warning" href="adminuploaddocument.php?vid=<?php echo $row['vehicle_id']?>&usrid=<?php echo $userid  ?>">upload document</a></td>


	</tr>
<?php
}
 ?>
</table>
</div>  
                </div>

                    </div>  
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of plans -->


<br><br><br>
<?php include 'footer.php' ?>

