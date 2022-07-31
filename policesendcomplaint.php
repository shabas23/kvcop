<?php include 'policeheader.php' ;

                $policeid=$_SESSION['policeid'];
$loginid=$_SESSION['logid'];


if (isset($_POST['send'])) 
{
	extract($_POST);
	$q="insert into complaints values(null,'$loginid','$complaint','reply-pending',now())";
	$r=insert($q);
	return redirect("policesendcomplaint.php");

}


?>


<section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <h1>SEND COMPLAINT</h1>

    


<form method="post">
	<center>
		<table class="table"  style="width: 500px;color:white">
			<tr>
				<th>complaint</th>
				<td><input type="text" name="complaint" required class="form-control"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="send" value="SEND" class="btn btn-success"></td>
			</tr>
			
		</table>

</div>
</div></div></section>




<h2>view complaint and reply</h2>
		<table class="table" style="width: auto;color: black">
			<tr>
				<th>slno</th>
<!-- 				<th>Company</th>
 --><!-- 				<th>LastName</th>
 -->				<th>complaint</th>
				<th>reply</th>
				<th>date</th>
			</tr>
<?php 
$q="SELECT * FROM complaints INNER JOIN   `police` ON `police`.`login_id`=`complaints`.`sender_id` where login_id='$loginid' ";
$r=select($q);
$slno=1;
foreach ($r as $row) {
?>

			<tr>
				<td><?php echo $slno++; ?></td>
<!-- 				<td><?php echo $row['company']; ?></td>
 --><!-- 				<td><?php echo $row['lname']; ?></td>
 -->				<td><?php echo $row['complaint']; ?></td>
				<td><?php echo $row['reply']; ?></td>
				<td><?php echo $row['date']; ?></td>

			</tr>




<?php
}

 ?>
		</table>
	</center>
</form>




<?php include 'footer.php' ?>