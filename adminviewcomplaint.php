<?php include 'adminheader.php'; ?>

    <h2 class="py-2">VIEW COMPLAINT</h2>
              </div>

            <div class="row gy-4" data-aos="zoom-in">
                <div class="col-lg-4">

<table class="table" style="width: 500px">
		<tr>
			<th>Complaint</th>
			<th>Reply</th>
			<th>Date</th>
	 	</tr>
		<?php 
$q="SELECT * FROM complaints
";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>
	

<tr>
	<td><?php echo $row['complaint']; ?></td>
	<?php 
		if ($row['reply']=="reply-pending") {?>
			<td><a href="adminreply.php?cid=<?php echo $row['complaint_id'] ?>">reply</a></td>

	<?php }
	else
	{
	 ?>
	
	<td><?php echo $row['reply']; ?></td>
	<?php 
		}
	 ?>
	<td><?php echo $row['date'];?></td>
	
</tr>

	 <?php 
}
	  ?>
	  </table>
	  </center>
	</div>  
                </div>

                    </div>  
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of plans -->


<br><br><br>


<?php include 'footer.php' ?>