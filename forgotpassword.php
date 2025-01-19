<!DOCTYPE html>
<html>
    <head> <title>College Project</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
<?php
if(isset($_POST['Reset']))
{

    //$uname=$_POST['email'];
    $password=$_POST['password'];
    $id=$_POST['id'];
    $id;

        $con = mysqli_connect("localhost", "root", "", "yoga_studio");
        $data = "";
        if($con)
        {
            $stmt ="UPDATE user set `password`='$password' WHERE id='$id'";
            $data = mysqli_query($con, $stmt);
            if ($data) {
                header("location:plans.php");
        }
        else{
            echo "Invalid Credentials";
        }
    }
    else {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_close($con);
    

}
?>
<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="assets/img/yogalogo.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="" method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <!-- <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i> -->
                    <span class="h1 fw-bold mb-0"></span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Please Enter your Email to Verify</h5>
                  <?php if (isset($_GET['error'])) { ?>

<p class="error" style="color:red"><?php echo $_GET['error']; ?></p>

<?php } ?>
                  <div class="form">
                    <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Enter Email"   required />
                    <!-- <label class="form-label" for="form2Example17">Email address</label> -->
                  </div>
                  <br>
                  <?php
   if(isset($_POST['check'])){
     $mail=$_POST['email'];
     $con = mysqli_connect("localhost", "root", "", "yoga_studio");
     if($con)
        {
            $stmt ="SELECT * FROM user WHERE `email`='$mail'";
            $data = mysqli_query($con, $stmt);
            $row = mysqli_fetch_assoc($data);
            if ($data->num_rows > 0) {
               ?>
                <div class="form">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Enter Password to Reset"    required/>
                <!-- <label class="form-label" for="form2Example27">Enter Password to reset</label> -->
              </div>
              <br>
              <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" name="Reset">Reset</button>
                  </div>
                  
           <?php // header("Location: forgotpassword.php?error=Now Enter the new Password to reset!"); 

            }
        else{
       
            header("Location:forgotpassword.php?error=Incorrect Details.. Try again!");
        }
    }
    else {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_close($con);
    }
    else{

 ?>

                  <!-- <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control form-control-lg"  required/>
                    <label class="form-label" for="form2Example27">Password</label>
                  </div> -->

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" name="check">Verify</button>
                  </div>

                  <!-- <a class="mb-5 pb-lg-2" href="#">Forgot password?</a> -->
                  <!-- <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php"
                      style="color: #393f81;">Register here</a></p> -->
                  <!-- <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a> -->
                </form>
<?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>