<?php include 'publicheader.php'; 


if (isset($_POST['login'])) 
{
    extract($_POST);
    $q="select * from login where username='$uname' and password='$pwd'";
    $r=select($q);
    if (sizeof($r)>0) 
    {
        $_SESSION['logid']=$r[0]['login_id'];
        $logid= $_SESSION['logid'];
        if ($r[0]['usertype']=="admin") 
        {
            alert("login successfully");
            return redirect("adminhome.php");

        }
        elseif ($r[0]['usertype']=="insurance") {
            $qo="SELECT * FROM `insurance_company` WHERE login_id='$logid'";
            $ro=select($qo);
            if (sizeof($ro)>0) 
            {
                $_SESSION['companyid']=$ro[0]['company_id'];
                $companyid=$_SESSION['companyid'];
               // alert($officerid);
                alert("login successfully");
                return redirect("insurancehome.php");

            }
        }
        elseif($r[0]['usertype']=="police")
        {
            $qf="select * from police where login_id='$logid'";
            $rf=select($qf);
            if (sizeof($rf)>0)
            {
                $_SESSION['policeid']=$rf[0]['police_id'];
                $policeid=$_SESSION['policeid'];
                alert("login successfully");
                return redirect("policehome.php");

            }
        }
        elseif ($r[0]['usertype']=="user") 
        {
            $qu="select * from users where login_id='$logid'";
            $ru=select($qu);
            if (sizeof($ru)>0) 
            {
                $_SESSION['userid']=$ru[0]['user_id'];
                $userid=$_SESSION['userid'];
                alert("login successfully");
                return redirect("userhome.php");


            }
        }


    }
}

?>


<!-- About -->
    <section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <h1>LOGIN</h1>

                          <form method="POST">
    <center>
                                    <h2 style="font-size: 70px;"></h2>

        <table class="table" style="width:500px;color: green">
            <tr>
                <th>username</th>
                <td><input type="text" name="uname" class="form-control"></td>
            </tr>
            <tr>
                <th>password</th>
                <td><input type="password" name="pwd" class="form-control"></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input type="submit" name="login" value="LOGIN" class="btn btn-success"></td>
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