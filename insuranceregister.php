<?php include 'publicheader.php'; 

if (isset($_POST['register'])) {
    extract($_POST);
    $qi="INSERT INTO login VALUES(NULL,'$uname','$pwd','insurance')";
    $ri=INSERT($qi);
    $q="INSERT INTO insurance_company VALUES(NULL,'$ri','$cname','$place','$phone','$email') ";
    $r=INSERT($q);
    alert("registered successfully");
    return redirect("insuranceregister.php");
}



?>


<!-- About -->
    <section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right"><br><br><br><br>

                    <h1>INSURANCE REGISTRATION</h1>
                          <form method="POST">
    <center>
                                    <h2 style="font-size: 70px;"></h2>

        <table class="table" style="width:500px;color: green">
                <tr>
                                <th>Insurance Company</th>
                                <td><input type="text" name="cname" required class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Place</th>
                                <td><input type="text" name="place" required class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td><input type="text" name="phone" pattern="[0-9]{10}" required class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\-[a-z]{2,}$" required class="form-control"></td>
                            </tr>
    
            <tr>
                <th>username</th>
                <td><input type="text" name="uname" class="form-control"></td>
            </tr>
            <tr>
                <th>password</th>
                <td><input type="password" name="pwd" class="form-control"></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input type="submit" name="register" value="REGISTER" class="btn btn-success"></td>
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

<br><br><br>
<?php include 'footer.php' ?>