<?php include 'adminheader.php'; 


if (isset($_POST['register'])) {
    extract($_POST);
    $path="images/".$_FILES['i1']['name'];
	$nam=uniqid();
	$filetype=strtolower(pathinfo($path,PATHINFO_EXTENSION));
	$target1="images/".$nam.".".$filetype;
	move_uploaded_file($_FILES['i1']['tmp_name'], $target1);
	
     $qi="INSERT INTO login VALUES(NULL,'$uname','$pwd','user')";
    $ri=INSERT($qi);
   
    $q="insert into users values(null,'$ri','$fname','$lname','$lt','$lg','$place','$pin','$hn','$gn','$dob','$target1','$phone','$email','$lno')";
    $r=INSERT($q);
   alert("added successfully");
return redirect("adminmanageuseraccounts.php");
}

if (isset($_GET['did']))
{
	extract($_GET);
	$qd="delete from users where user_id='$did'";
	$rd=delete($qd);
	alert("deleted");
	return redirect("adminmanageuseraccounts.php");
}
if (isset($_GET['uid']))
{
	extract($_GET);
	$qs="select * from users where user_id='$uid'";
	$rs=select($qs);
	
}
if (isset($_POST['update']))
{
	extract($_POST);
	$path="images/".$_FILES['i1']['name'];
	$nam=uniqid();
	$filetype=strtolower(pathinfo($path,PATHINFO_EXTENSION));
	$target1="images/".$nam.".".$filetype;
	move_uploaded_file($_FILES['i1']['tmp_name'], $target1);
	
	$qu="UPDATE  users SET first_name='$fname',last_name='$lname',latitude='$lt',longitude='$lg',place='$place',pincode='$pin',house_name='$hn',gender='$gn',dob='$dob',photo='$target1',phone='$phone',email='$email',license_no='$lno'WHERE user_id='$uid'";
	 $ru=update($qu);
	 alert("updated");
  return redirect("adminmanageuseraccounts.php");
}




?>

<form method="POST" enctype="multipart/form-data">


<?php 
if (isset($_GET['uid'])) {
	?>
 <section class="about d-flex align-items-center text-light py-5" id="about"  style="background-attachment: fixed; height: auto;">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                	

<br><br><br><br>

                    <h2>UPDATE MANAGE USER ACCOUNT</h2>
    <center>
                                    <h2 style="font-size: 70px;"></h2>

        <table class="table" style="width:500px;color: green">
               <tr>
				<th>FirstName</th>
				<td><input type="text" name="fname" value="<?php echo $rs[0]['first_name'] ?>" required class="form-control"></td>
			</tr>
			<tr>
				<th>LastName</th>
				<td><input type="text" name="lname" value="<?php echo $rs[0]['last_name'] ?>" required class="form-control"></td>
			</tr>
			<tr>
				<th>Pincode</th>
				<td><input type="text" name="pin" value="<?php echo $rs[0]['pincode'] ?>" required class="form-control"></td>
			</tr>
			
			<tr>
				<th>Phone</th>
				<td><input type="text" name="phone" value="<?php echo $rs[0]['phone'] ?>" pattern="[0-9]{10}" required class="form-control"></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="text" name="email" value="<?php echo $rs[0]['email'] ?>" required class="form-control"></td>
			</tr>
			<tr>
                <th>Date Of Birth</th>
                <td><input type="date" name="dob" value="<?php echo $rs[0]['dob'] ?>" required class="form-control"></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><input type="radio" name="gn" value="<?php echo $rs[0]['gender'] ?>" required  value="male">Male
<input type="radio" name="gn" required  value="female">Female

                </td>
            </tr> 
            <tr>
				<th>House Name</th>
				<td><input type="text" name="hn" value="<?php echo $rs[0]['house_name'] ?>" required class="form-control"></td>
			</tr>
			
            <tr>
				<th>Place</th>
				<td><input type="text" name="place" value="<?php echo $rs[0]['place'] ?>" required class="form-control"></td>
			</tr>
			</tr>
			   <tr>
                <th> Latitude</th>
                <td><input type="text" name="lt" value="<?php echo $rs[0]['latitude'] ?>" required class="form-control"></td>
            </tr> 
            <tr>
				<th>Longitude</th>
				<td><input type="text" name="lg" value="<?php echo $rs[0]['longitude'] ?>" required class="form-control"></td>
			</tr>
			
            <tr>
				<th>Image </th>
				<td><input type="file" name="i1" value="<?php echo $rs[0]['photo'] ?>" required class="form-control"></td>
			</tr>
			<tr>
				<th>license_no</th>
				<td><input type="text" name="lno" value="<?php echo $rs[0]['license_no'] ?>"  required class="form-control"></td>
			</tr>
			

            <tr>
                <td align="center" colspan="2"><input type="submit" name="update" value="UPDATE" class="btn btn-success"></td>
            </tr>
        </table>
    </center>
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
    <section class="about d-flex align-items-center text-light py-5" id="about" style="background-attachment: fixed; height: auto;">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                	

                    <h2 style="padding-top: 2em">MANAGE USER ACCOUNT</h2>
    <center>
                                    <h2 style="font-size: 70px;"></h2>

        <table class="table" style="width:500px;color: green">
               <tr>
				<th>FirstName</th>
				<td><input type="text" name="fname" required class="form-control"></td>
			</tr>
			<tr>
				<th>LastName</th>
				<td><input type="text" name="lname" required class="form-control"></td>
			</tr>
			<tr>
				<th>Pincode</th>
				<td><input type="text" name="pin" required class="form-control"></td>
			</tr>
			
			<tr>
				<th>Phone</th>
				<td><input type="text" name="phone" pattern="[0-9]{10}" required class="form-control"></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="text" name="email" required class="form-control"></td>
			</tr>
			<tr>
                <th>Date Of Birth</th>
                <td><input type="date" name="dob" required class="form-control"></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><input type="radio" name="gn" required  value="male">Male
				<input type="radio" name="gn" required  value="female">Female

                </td>
            </tr> 
            <tr>
				<th>House Name</th>
				<td><input type="text" name="hn" required class="form-control"></td>
			</tr>
			
            <tr>
				<th>Place</th>
				<td><input type="text" name="place" required class="form-control"></td>
			</tr>
			</tr>
			   <tr>
                <th> Latitude</th>
                <td><input type="text" name="lt" required class="form-control"></td>
            </tr> 
            <tr>
				<th>Longitude</th>
				<td><input type="text" name="lg" required class="form-control"></td>
			</tr>
			
            <tr>
				<th>Image </th>
				<td><input type="file" name="i1" required class="form-control"></td>
			</tr>
			<tr>
				<th>license_no</th>
				<td><input type="text" name="lno" required class="form-control"></td>
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
 -->                <h2 class="py-2">VIEW MANAGE USER ACCOUNT</h2>
              </div>

            <div class="row gy-4" data-aos="zoom-in">
                <div class="col-lg-4">

<table class="table" style="width:300px">
	
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
<?php 

$q="select * from users";
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

		
		  <td><a class="btn btn-success" href="?uid=<?php echo $row ['user_id']?>">update</a></td>
  <td><a class="btn btn-danger" href="?did=<?php echo $row['user_id']?>">delete</a></td>
    <td><a class="btn btn-warning" href="adminmanagevehicle.php?userid=<?php echo $row['user_id']?>">Manage vehicle </a></td>


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