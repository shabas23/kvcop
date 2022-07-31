<?php include 'userheader.php' ?>

    
<section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">

 

        <table class="table" style="width:500px;color: white">
    
<h2>VIEW  INSURANCE</h2>
        <table class="table" style="width: auto;color: white">
            <tr>
                <th>slno</th>
                <th>insurance name</th>
<!--                <th>LastName</th>
 -->                <th>Description</th>
                
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
              <td><a class="btn btn-info" href="usersendinsurancerequest.php?insuranceid=<?php echo $row['insurance_id'] ?>">send request</a></td>

                
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