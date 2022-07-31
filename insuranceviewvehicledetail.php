    <?php include 'insuranceheader.php';

if (isset($_GET['did']))
{
    extract($_GET);
    $qd="delete from requestinsurance where request_id='$did'";
    $rd=delete($qd);
    alert("deleted");
    return redirect("insuranceviewvehicledetail.php");
}
if (isset($_GET['uid']))
{
    extract($_GET);
    $qu="UPDATE  requestinsurance SET status='accept' WHERE request_id='$uid'";
     $ru=update($qu);
     alert("updated");
  return redirect("insuranceviewvehicledetail.php");
}




     ?>
<br><br><br><br><br>
     <form method="post">
     <h2 class="py-2">VIEW VEHICLE INFORMATION</h2>
              </div>

            <div class="row gy-4" data-aos="zoom-in">
                <div class="col-lg-4">

<table class="table" style="width: 500px">
	
<tr>

                                <th> Register_No</th>

                                <th>Manufacture_Year</th>

                                <th>Brand</th>
                                <th>Model</th>
                                <th> Status</th>

</tr>
<?php 
$q="select * from vehicles inner join requestinsurance using(vehicle_id) ";
$r=select($q);
foreach ($r as $row) {
	?>
	<tr>
		<td><?php echo $row['register_no']; ?></td>
		<td><?php echo $row['manufacture_year']; ?></td>
		<td><?php echo $row['model']; ?></td>
		<td><?php echo $row['brand']; ?></td>
    <?php   
      if ($row['status']=="pending") { ?>
<td><a class="btn btn-success" href="?uid=<?php echo $row ['request_id']?>">accept</a></td>
  <td><a class="btn btn-danger" href="?did=<?php echo $row['request_id']?>">reject</a></td>
   

        <?php
        # code...
      }
      else
      {
     ?>
		      <td><?php echo $row['status']; ?></td>
<?php   } ?>

	</tr>
<?php
}
 ?>
</table></form>
</div>  
                </div>

                    </div>  
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of plans -->


<br><br><br>
<?php include 'footer.php' ?>

