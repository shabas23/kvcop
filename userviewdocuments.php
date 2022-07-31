<?php include 'userheader.php' ?>

    
<section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">

                    <h2>VIEW DOCUMENTS</h2>
 

        <table class="table" style="width:500px;color: white">
    
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
                <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down"> 
                    <img class="img-fluid" src="./assets/images/about.jpg" alt="about" >
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of about -->


<?php include 'footer.php' ?>