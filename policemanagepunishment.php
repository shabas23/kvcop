<?php include 'policeheader.php';

    extract($_GET);

                    $policeid=$_SESSION['policeid'];


if (isset($_POST['assign'])) {
    extract($_POST);
    $q="INSERT INTO punishments VALUES(NULL,'$pt','$userid','$policeid',curdate(),'assign') ";
    $r=INSERT($q);
  alert("added successfully");
    return redirect("policemanagepunishment.php");
}





 ?>

    
<section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <h1>Manage Punishment </h1>
                    <form method="post">
                        <table class="table" style="width:500px;color: white">
                            <tr>
                                <th>Punishment Type</th>
                                <td><select name="pt">
                                    <option>choose</option>
                                    <?php 
                                    $q="SELECT * from punishment_types ";
                                    $r=SELECT($q);
                                    foreach ($r as $row) {
                                        ?>
                                        <option value="<?php echo $row['punishment_type_id'] ?>">
                                            <?php echo $row['punishment_type_name'] ?>
                                        </option>
                                    <?php }
                                     ?>
                                </select></td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2"><input type="submit" name="assign" value="ASSIGN" class="btn btn-success"></td>
                            </tr>
                        </table>
                    </form>
<br><br><br>
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

$q="SELECT *,punishments.punishment_status as pstatus FROM `punishments` INNER JOIN  `punishment_types` USING (`punishment_type_id`) INNER JOIN `users` USING(`user_id`) inner join police using (police_id) where  police_id='$policeid'";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>
    

<tr>
    <td><?php echo $row['station_name']; ?></td>
        <td><?php echo $row['first_name']; ?></td>

    <td><?php echo $row['last_name']; ?></td>
        
    <td><?php echo $row['punishment_type_name']; ?></td>
    
    <td><?php echo $row['punishment_date'];?></td>
        <td><?php echo $row['pstatus'];?></td>
    
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