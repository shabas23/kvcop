<?php include 'adminheader.php';
extract($_GET);

if (isset($_POST['send'])) 
{
	extract($_POST);
	$q="update `complaints` set reply='$reply' where complaint_id='$cid'";
	update($q);
	alert("replied");
	return redirect("adminviewcomplaint.php");
}
 ?>
 <section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right"><br><br><br><br>

                    <h2>SEND REPLY</h2>
<center>
	<form method="post">
<!-- 		<h1>Reply</h1>
 -->		<table class="table">
			<tr>
<!-- 				<th>Reply</th>
 -->				<td><input type="text" name="reply" required class="form-control"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="send" value="SEND" class="btn btn-success"></td>
			</tr>
		</table>
	</form>
	 </div>
                <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down"> 
                    <img class="img-fluid" src="./assets/images/about.jpg" alt="about" >
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of about -->

	  
<?php include 'footer.php'?>





