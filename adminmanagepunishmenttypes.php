<?php include 'adminheader.php'; 


if (isset($_POST['register'])) {
    extract($_POST);
    $q="INSERT INTO punishment_types VALUES(NULL,'$pname','$des','$pde','$pamt') ";
    $r=INSERT($q);
    alert("added successfully");
    return redirect("adminmanagepunishmenttypes.php");
}

if (isset($_GET['did']))
{
	extract($_GET);
	$qd="delete from punishment_types where punishment_type_id='$did'";
	$rd=delete($qd);
	alert("deleted");
	return redirect("adminmanagepunishmenttypes.php");
}
if (isset($_GET['uid']))
{
	extract($_GET);
	$qs="select * from punishment_types where punishment_type_id='$uid'";
	$rs=select($qs);
	
}
if (isset($_POST['update']))
{
	extract($_POST);
	$qu="UPDATE  punishment_types SET punishment_type_name='$pname',punishment_type_description='$des' ,penalty_description='$pde',penalty_amount='$pamt'WHERE punishment_type_id='$uid'";
	 $ru=update($qu);
	 alert("updated");
  return redirect("adminmanagepunishmenttypes.php");
}



?>

<?php 
if (isset($_GET['uid'])) {
	?>
 <section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right"><br><br><br><br>

                    <h2>UPDATE MANAGE PUNISHMENT TYPE</h2>
                          <form method="POST">
    <center>
                                    <h2 style="font-size: 70px;"></h2>

        <table class="table" style="width:500px;color: green">
                			<tr>
                                <th>Punishment Name</th>
                                <td><input type="text" name="pname" value="<?php echo $rs[0]['punishment_type_name'] ?>" required class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Punishment Description</th>
                                <td><input type="text" name="des" value="<?php echo $rs[0]['punishment_type_description'] ?>" required class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Penality Description</th>
                                <td><input type="text" name="pde" value="<?php echo $rs[0]['penalty_description'] ?>" required class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Penality Amount </th>
                                <td><input type="text" name="pamt" value="<?php echo $rs[0]['penalty_amount'] ?>" required class="form-control"></td>
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

                    <h2>MANAGE PUNISHMENT TYPE</h2>
                          <form method="POST">
    <center>
                                    <h2 style="font-size: 70px;"></h2>

        <table class="table" style="width:500px;color: green">
                <tr>
                                <th>Punishment Name </th>
                                <td><input type="text" name="pname" required class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Punishment Description</th>
                                <td><input type="text" name="des" required class="form-control"></td>
                            </tr>
                             <tr>
                                <th>Penality Description</th>
                                <td><input type="text" name="pde"  required class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Penality Amount </th>
                                <td><input type="text" name="pamt"  required class="form-control"></td>
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
 -->                <h2 class="py-2">VIEW MANAGE PUNISHMENT TYPE</h2>
              </div>

            <div class="row gy-4" data-aos="zoom-in">
                <div class="col-lg-4">

<table class="table" style="width: 500px">
	
<tr>
<th>Punishment Name </th>
<th>Punishment Description</th>
<th>Penality Description</th>

<th>Penality Amount </th>


</tr>
<?php 
$q="select * from punishment_types";
$r=select($q);
foreach ($r as $row) {
	?>
	<tr>
		<td><?php echo $row['punishment_type_name']; ?></td>
		<td><?php echo $row['punishment_type_description']; ?></td>
		<td><?php echo $row['penalty_description']; ?></td>
		<td><?php echo $row['penalty_amount']; ?></td>
		  <td><a class="btn btn-success" href="?uid=<?php echo $row ['punishment_type_id']?>">update</a></td>
  <td><a class="btn btn-danger" href="?did=<?php echo $row['punishment_type_id']?>">delete</a></td>

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