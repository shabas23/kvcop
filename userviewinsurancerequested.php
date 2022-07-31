<?php include 'userheader.php' ?>

    
<section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">

 

        <table class="table" style="width:500px;color: white">
    
<h2>VIEW  INSURANCE REQUEST</h2>
        <table class="table" style="width: auto;color: white">

            


            <tr>
                <th>slno</th>
                <th>Insurance Name</th>
                <th>Registration No.</th>
                <th>Request Date</th>
                <th>From Date</th>
                <th>To Date</th>
            </tr>
<?php 
                        $userid=$_SESSION['userid'];

$q="SELECT *  FROM `requestinsurance` INNER JOIN `insurance` USING (`insurance_id`)INNER JOIN `vehicles` USING(`vehicle_id`) where  user_id='$userid'";
$r=select($q);
$slno=1;
foreach ($r as $row) {
?>

            <tr>
                <td><?php echo $slno++; ?></td>
                <td><?php echo $row['insurance_name']; ?></td>
                <td><?php echo $row['register_no']; ?></td>
                <td><?php echo $row['request_date']; ?></td>
                <td><?php echo $row['fromdate']; ?></td>
                <td><?php echo $row['todate']; ?></td>
                

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