<?php include 'adminheader.php'; 
extract($_GET);

if (isset($_POST['register'])) {
    extract($_POST);
      $path="images/".$_FILES['df']['name'];
    $nam=uniqid();
    $filetype=strtolower(pathinfo($path,PATHINFO_EXTENSION));
    $target1="images/".$nam.".".$filetype;
    move_uploaded_file($_FILES['df']['tmp_name'], $target1);

    $q="INSERT INTO documents VALUES(NULL,'$dt','$usrid','$target1') ";
    $r=INSERT($q);
    alert("added successfully");
    return redirect("adminuploaddocument.php");
}


?>






<!-- About -->
    <section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right"><br><br><br><br>

                    <h2>UPLOAD DOCUMENT</h2>
                          <form method="POST" enctype="multipart/form-data">
    <center>
                                    <h2 style="font-size: 70px;"></h2>

        <table class="table" style="width:500px;color: green">
                <tr>
                                <th> Document Type</th>
                                <td>
                                    <select name="dt">
                                        <option>choose</option>
                                        <?php 
                                        $q="select * from document_types";
                                        $r=select($q);
                                        foreach ($r as $row) {
                                            ?>
                                            <option value="<?php echo $row['doc_type_id'] ?>">
                                                <?php echo $row['doc_type_name']; ?>
                                            </option>
                                           <?php
                                        }
                                         ?>
                                        
                                     </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Document File</th>
                                <td><input type="file" name="df" required class="form-control"></td>
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

                <h2 class="py-2">VIEW UPLOAD DOCUMENT</h2>
              </div>

            <div class="row gy-4" data-aos="zoom-in">
                <div class="col-lg-4">

<table class="table" style="width: 500px">
	
<tr>

                                <th> First Name</th>

                                <th>Last Name</th>

                                <th>Document Types</th>
                                <th>Document File</th>

</tr>
<?php 
$q="SELECT * FROM `users` INNER JOIN `documents`USING (`user_id`)INNER JOIN `document_types` USING(`doc_type_id`)";
$r=select($q);
foreach ($r as $row) {
	?>
	<tr>
		<td><?php echo $row['first_name']; ?></td>
		<td><?php echo $row['last_name']; ?></td>
		<td><?php echo $row['doc_type_name']; ?></td>
		<td><img src="<?php echo $row['document_file']; ?>"></td>
		 

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

