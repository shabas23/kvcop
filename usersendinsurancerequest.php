<?php include 'userheader.php';
    extract($_GET);

if (isset($_POST['send'])) {
    extract($_POST);
    $q="insert into requestinsurance values(null,'$insuranceid','$vn',curdate(),'$fd','$td','pending')";

    $r=insert($q);
    alert("request send");
    return redirect("usersendinsurancerequest.php");
}
 ?>

    
<section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">

 <form method="post">

<!--         <table class="table" style="width:500px;color: white">
 -->    
<h2>VIEW  SEND REQUEST</h2>
        <table class="table" style="width: auto;color: white">
            <tr>
                <th>Vehicle No</th>
                <td><select name="vn">
                    <option>choose</option>
                    <?php 
                    $q="select * from vehicles";
                    $r=select($q);
                    foreach ($r as $row) { ?>
                        <option value="<?php echo $row['vehicle_id'] ?>">
                            <?php echo $row['register_no']; ?>
                        </option>

<?php                    }
                     ?>
                    
                </select></td>
            </tr>
            <tr>
                <th>From Date</th>
                <td><input type="date" name="fd"></td>
            </tr>
            <tr>
                <th>To Date</th>
                <td><input type="date" name="td"></td>
            </tr>
            <tr>
                <td><input type="submit" name="send" value="SEND"></td>
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


<?php include 'footer.php' ?>