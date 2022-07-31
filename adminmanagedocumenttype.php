<?php include 'adminheader.php'; 


if (isset($_POST['register'])) {
    extract($_POST);
    $q="INSERT INTO document_types VALUES(NULL,'$dname','$des') ";
    $r=INSERT($q);
    alert("added successfully");
    return redirect("adminmanagedocumenttype.php");
}

if (isset($_GET['did']))
{
	extract($_GET);
	$qd="delete from document_types where doc_type_id='$did'";
	$rd=delete($qd);
	alert("deleted");
	return redirect("adminmanagedocumenttype.php");
}
if (isset($_GET['uid']))
{
	extract($_GET);
	$qs="select * from document_types where doc_type_id='$uid'";
	$rs=select($qs);
	
}
if (isset($_POST['update']))
{
	extract($_POST);
	$qu="UPDATE  document_types SET `doc_type_name`='$dname',doc_type_description='$des'WHERE doc_type_id='$uid'";
	 $ru=update($qu);
	 alert("updated");
  return redirect("adminmanagedocumenttype.php");
}



?>

<?php 
if (isset($_GET['uid'])) {
	?>
 <section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right"><br><br><br><br>

                    <h2>UPDATE MANAGE DOCUMENT TYPE</h2>
                          <form method="POST">
    <center>
                                    <h2 style="font-size: 70px;"></h2>

        <table class="table" style="width:500px;color: green">
                <tr>
                                <th>Document Name</th>
                                <td><input type="text" name="dname" value="<?php echo $rs[0]['doc_type_name'] ?>" required class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Document Description</th>
                                <td><input type="text" name="des" value="<?php echo $rs[0]['doc_type_description'] ?>" required class="form-control"></td>
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

                    <h2>MANAGE DOCUMENT TYPE</h2>
                          <form method="POST">
    <center>
                                    <h2 style="font-size: 70px;"></h2>

        <table class="table" style="width:500px;color: green">
                <tr>
                                <th>Document Name</th>
                                <td><input type="text" name="dname" required class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Document Description</th>
                                <td><input type="text" name="des" required class="form-control"></td>
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
 -->                <h2 class="py-2">VIEW MANAGE DOCUMENT TYPE</h2>
              </div>

            <div class="row gy-4" data-aos="zoom-in">
                <div class="col-lg-4">

<table class="table" style="width: 500px">
	
<tr>
<th>Document Name</th>
<th>Document Description</th>
</tr>
<?php 
$q="select * from document_types";
$r=select($q);
foreach ($r as $row) {
	?>
	<tr>
		<td><?php echo $row['doc_type_name']; ?></td>
		<td><?php echo $row['doc_type_description']; ?></td>
		  <td><a class="btn btn-success" href="?uid=<?php echo $row ['doc_type_id']?>">update</a></td>
  <td><a class="btn btn-danger" href="?did=<?php echo $row['doc_type_id']?>">delete</a></td>

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