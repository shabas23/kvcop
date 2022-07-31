<?php include 'adminheader.php'; 


if (isset($_POST['register'])) {
    extract($_POST);
    $qi="INSERT INTO login VALUES(NULL,'$uname','$pwd','police')";
    $ri=INSERT($qi);
    $q="INSERT INTO police VALUES(NULL,'$ri','$sname','$phone','$email','$place','$pin') ";
    $r=INSERT($q);
    alert("added successfully");
    return redirect("adminmanagepoliceaccount.php");
}

if (isset($_GET['did']))
{
	extract($_GET);
	$qd="delete from police where police_id='$did'";
	$rd=delete($qd);
	alert("deleted");
	return redirect("adminmanagepoliceaccount.php");
}
if (isset($_GET['uid']))
{
	extract($_GET);
	$qs="select * from police where police_id='$uid'";
	$rs=select($qs);
	
}
if (isset($_POST['update']))
{
	extract($_POST);
	$qu="UPDATE  police SET `station_name`='$sname',phone='$phone',email='$email',place='$place',pincode='$pin' WHERE police_id='$uid'";
	 $ru=update($qu);
	 alert("updated");
  return redirect("adminmanagepoliceaccount.php");
}



?>


<?php 
if (isset($_GET['uid'])) {
	?>

 <section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right"><br><br><br><br>

                    <h2>UPDATE MANAGE POLICE ACCOUNT</h2>
                          <form method="POST">
    <center>
                                    <h2 style="font-size: 70px;"></h2>

        <table class="table" style="width:500px;color: green">
                <tr>
                                <th>Station Name</th>
                                <td><input type="text" name="sname" value="<?php echo $rs[0]['station_name'] ?>" required class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Place</th>
                                <td><input type="text" name="place" value="<?php echo $rs[0]['place'] ?>" required class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td><input type="text" name="phone" value="<?php echo $rs[0]['phone'] ?>" pattern="[0-9]{10}" required class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><input type="text" name="email" value="<?php echo $rs[0]['email'] ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\-[a-z]{2,}$" required class="form-control"></td>
                            </tr>
                            <tr>
                            	<th>Pincode</th>
                            	<td><input type="text" name="pin" value="<?php echo $rs[0]['pincode'] ?>" required class="form-control" ></td>
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

                    <h2>MANAGE POLICE ACCOUNT</h2>
                          <form method="POST">
    <center>
                                    <h2 style="font-size: 70px;"></h2>

        <table class="table" style="width:500px;color: green">
                <tr>
                                <th>Station Name</th>
                                <td><input type="text" name="sname" required class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Place</th>
                                <td><input type="text" name="place" required class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td><input type="text" name="phone" pattern="[0-9]{10}" required class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\-[a-z]{2,}$" required class="form-control"></td>
                            </tr>
                            <tr>
                            	<th>Pincode</th>
                            	<td><input type="text" name="pin" required class="form-control" ></td>
                            </tr>
    
            <tr>
                <th>username</th>
                <td><input type="text" name="uname" class="form-control"></td>
            </tr>
            <tr>
                <th>password</th>
                <td><input type="password" name="pwd" class="form-control"></td>
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
 -->                <h2 class="py-2">View Manage Police Account</h2>
              </div>

            <div class="row gy-4" data-aos="zoom-in">
                <div class="col-lg-4">

<table class="table" style="width: 500px">
	
<tr>
<th>Station Name</th>
<th>Phone</th>
<th>Email</th>
<th>Place</th>
<th>Pincode</th>
</tr>
<?php 
$q="select * from police";
$r=select($q);
foreach ($r as $row) {
	?>
	<tr>
		<td><?php echo $row['station_name']; ?></td>
		<td><?php echo $row['phone']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['place']; ?></td>
		<td><?php echo $row['pincode']; ?></td>
		  <td><a class="btn btn-success" href="?uid=<?php echo $row ['police_id']?>">update</a></td>
  <td><a class="btn btn-danger" href="?did=<?php echo $row['police_id']?>">delete</a></td>

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

