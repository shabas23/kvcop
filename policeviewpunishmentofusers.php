<?php include 'policeheader.php' ?>

    
<section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">

 <h2>VIEW  PUNISHMENTS</h2>


        <table class="table" style="width:500px;color: white">
    
<tr>
            <th>Station Name</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Punishmnent Type</th>
            <th>Date</th>
            <th>Status</th>
        </tr>
        <?php 
                $policeid=$_SESSION['policeid'];

$q="SELECT * FROM `punishments` INNER JOIN  `punishment_types` USING (`punishment_type_id`) INNER JOIN `users` USING(`user_id`) inner join police using (police_id)";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>
    

<tr>
    <td><?php echo $row['station_name']; ?></td>
        <td><?php echo $row['first_name']; ?></td>

    <td><?php echo $row['last_name']; ?></td>
        
    <td><?php echo $row['punishment_type_name']; ?></td>
    
    <td><?php echo $row['punishment_date'];?></td>
        <td><?php echo $row['punishment_status'];?></td>
    
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