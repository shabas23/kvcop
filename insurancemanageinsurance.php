<?php include 'insuranceheader.php' ;

                $companyid=$_SESSION['companyid'];


if (isset($_POST['add'])) 
{
	extract($_POST);
	$q="insert into insurance values(null,'$in','$des')";
	$r=insert($q);
	return redirect("insurancemanageinsurance.php");

}
if (isset($_GET['did']))
{
	extract($_GET);
	$qd="delete from insurance where insurance_id='$did'";
	$rd=delete($qd);
	alert("deleted");
	return redirect("insurancemanageinsurance.php");
}
if (isset($_GET['uid']))
{
	extract($_GET);
	$qs="select * from insurance where insurance_id='$uid'";
	$rs=select($qs);
	
}
if (isset($_POST['update']))
{
	extract($_POST);
	$qu="UPDATE  insurance SET `insurance_name`='$in',description='$des' WHERE insurance_id='$uid'";
	 $ru=update($qu);
	 alert("updated");
  return redirect("insurancemanageinsurance.php");
}


?>
<form method="post">


<?php 
if (isset($_GET['uid'])) { ?>


<section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <h1>UPDATE MANAGE INSURANCE</h1>

    


	<center>
		<table class="table"  style="width: 500px;color:white">
			<tr>
				<th>Insurance_Name</th>
				<td><input type="text" name="in" value="<?php echo $rs[0]['insurance_name'] ?>" required class="form-control"></td>
			</tr>
						<tr>
				<th>Description</th>
				<td><input type="text" name="des" value="<?php echo $rs[0]['description'] ?>" required class="form-control"></td>
			</tr>

			<tr>
				<td align="center" colspan="2"><input type="submit" name="update" value="UPDATE" class="btn btn-success"></td>
			</tr>
			
		</table>
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





<section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <h1>MANAGE INSURANCE</h1>

    


	<center>
		<table class="table"  style="width: 500px;color:white">
			<tr>
				<th>Insurance_Name</th>
				<td><input type="text" name="in" required class="form-control"></td>
			</tr>
				<tr>
				<th>Description</th>
				<td><input type="text" name="des" required class="form-control"></td>
			</tr>

			<tr>
				<td align="center" colspan="2"><input type="submit" name="add" value="ADD" class="btn btn-success"></td>
			</tr>
			
		</table>

                    </div>
                <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down"> 
                    <img class="img-fluid" src="./assets/images/about.jpg" alt="about" >
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of about -->


<?php } ?>

<h2>VIEW MANAGE INSURANCE</h2>
		<table class="table" style="width: auto;color: black">
			<tr>
				<th>slno</th>
				<th>insurance name</th>
<!-- 				<th>LastName</th>
 -->				<th>Description</th>
				
			</tr>
<?php 
$q="SELECT * FROM insurance  ";
$r=select($q);
$slno=1;
foreach ($r as $row) {
?>

			<tr>
				<td><?php echo $slno++; ?></td>
				<td><?php echo $row['insurance_name']; ?></td>
 				<td><?php echo $row['description']; ?></td>
 				<td><a class="btn btn-success" href="?uid=<?php echo $row ['insurance_id']?>">update</a></td>
  <td><a class="btn btn-danger" href="?did=<?php echo $row['insurance_id']?>">delete</a></td>

				
			</tr>




<?php
}

 ?>
		</table>
	</center>
</form>




<?php include 'footer.php' ?>