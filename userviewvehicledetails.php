<?php include 'userheader.php';
                $userid=$_SESSION['userid'];

 ?>

    
<section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">

 
    
    
 <h2>VIEW VEHICLE INFORMATION</h2>
              

            
        <table class="table" style="width:500px;color: white">
    
<tr>

                                <th> Register_No</th>

                                <th>Manufacture_Year</th>

                                <th>Brand</th>
                                <th>Model</th>

</tr>
<?php 
$q="select * from vehicles inner join users using(user_id) where user_id='$userid'";
$r=select($q);
foreach ($r as $row) {
    ?>
    <tr>
        <td><?php echo $row['register_no']; ?></td>
        <td><?php echo $row['manufacture_year']; ?></td>
        <td><?php echo $row['model']; ?></td>
        <td><?php echo $row['brand']; ?></td>
        

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