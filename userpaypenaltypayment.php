<?php include 'userheader.php';
                $userid=$_SESSION['userid'];

extract($_GET);

if (isset($_POST['payment'])) {
    extract($_POST);
    $q="insert into payments values(null,'$punishmentid','$userid','$amount',curdate())";
    $r=insert($q);
    alert("paid successfully");
    return redirect("userviewpunishments.php");

}


 ?>

    
<section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">

<form method="post">

<table class="table" style="width:500px;color: white">
            <tr>
                    <th>CardNo</th>
                    <td><input type="text" name="" required class="form-control"></td>
                </tr>
                <tr>
                    <th>CVV</th>
                    <td><input type="text" name="" required class="form-control"></td>
                </tr>
                <tr>
                    <th>ExpiryDate</th>
                    <td><input type="text" name="" required class="form-control"></td>
                </tr>
                <tr>
                    <th>Cardholder</th>
                    <td><input type="text" name="" required class="form-control"></td>
                </tr>
                <tr>
                    <th>Amount</th>
                    <td><input type="text" name="amount" value="<?php echo $pay ?>"  required  class="form-control"></td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><input type="submit" name="payment" value="PAYMENT" class="btn btn-success"></td>
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


<?php include 'footer.php' ?>