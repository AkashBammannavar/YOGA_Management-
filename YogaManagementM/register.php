<!DOCTYPE html>
<html>
    <head> <title>College Project</title>
    <?php include "meta.php" ?>
<style>
    .gradient-custom {
/* fallback for old browsers */
background: #f093fb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
  /* Chrome, Safari, Edge, Opera */
  input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
</style>
</head>
<body>
<?php include "header.php" ?>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>

            <?php if (isset($_GET['error'])) { ?>

<p class="error" style="color:red"><?php echo $_GET['error']; ?></p>

<?php } ?>
            <form action="userfunction.php" method="post">

              <div class="row">
             
                <div class="col-md-6 mb-4">

                <div class="form">
                <input type="text" id="fname" name="fname" class="form-control" placeholder="Enter Your Name" required />
                <!-- <label class="form-label" for="firstName">Name</label> -->
                </div>

                </div>
                <div class="col-md-6 mb-4">

                <div class="form">
                <input type="number" id="age" name="age" class="form-control" placeholder="Enter Age"  required/>
                <!-- <label class="form-label" for="firstName">Age</label> -->
                </div>

                </div>
               
              </div>


              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">
            
                  <div class="form">
                  <h6 class="mb-2 pb-1">Select BirthDate: </h6>
                    <input type="date" name="dob" class="form-control form-control-lg" id="dob" max="<?= date('Y-m-d'); ?>" value="<?= date('Y-m-d', strtotime("-0 days", strtotime(date('Y-m-d')))); ?>" placeholder="Enter DOB"  required/>
                 
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                      value="female" checked />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="male" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender"
                      value="other" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" required />
                    <!-- <label class="form-label" for="emailAddress">Email</label> -->
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                <div class="form">
                    <input type="tel" maxlength="10" id="mobile" name="mobile" class="form-control" placeholder="Phone Number" required />
                    <!-- <label class="form-label" for="phoneNumber">Phone Number</label> -->
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                <div class="form">
                <input type="text" id="uname" name="uname" class="form-control" placeholder="Enter Username" required />
                <!-- <label class="form-label" for="firstName">Username</label> -->
                </div>
              </div>
              <div class="col-md-6 mb-4">

                <div class="form">
                <input type="text" id="password" name="password" class="form-control"  placeholder="Enter Password"  required />
                <!-- <label class="form-label" for="firstName">Password</label> -->
                </div>
                </div>
                </diV>
                <div class="row">
                <div class="col-md-6 mb-4">

                
                <div class="form">
                  <textarea class="form-control" id="textAreaExample" cols="3" rows="3" name="address" placeholder="Enter Address"   required></textarea>
                  <!-- <label class="form-label" for="textAreaExample">Address</label> -->
                </div>
                
                
              </div>
              <div class="col-md-6 mb-4">

                <div class="form">
                <input type="text" id="transaction" name="transaction" class="form-control form-control-lg" placeholder="Enter Transaction ID" required  />
                <!-- <label class="form-label" for="firstName">Transaction ID</label> -->
                </div>
                </div>
                </diV>
                <div class="row">
              
              <div class="col-md-8 mb-4">

                <div class="form">
                <select class="select form-control-lg" name="subscription">
                    <option value="1">Select Subscription Type</option>
                    <option value="Beginner">Beginner</option>
                    <option value="Intermideate">Intermideate</option>
                    <option value="Expert">Expert</option>
                </select>
                </div>
                </div>
                </diV>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" name="Register" value="Register" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>