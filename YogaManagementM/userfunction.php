<?php
function connectDB()
{

    //$con = mysqli_connect("localhost", "root", "", "disciple");
    $con = mysqli_connect("localhost", "root", "", "yoga_studio");

    return $con;
}
if(isset($_POST['Register']))
{
    $con = connectDB();
    $data = "";
    $name=$_POST['fname'];
    $age=$_POST['age'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    $subscription=$_POST['subscription'];
    $transaction=$_POST['transaction'];
    $address=$_POST['address'];

    if ($con) {

        $stmt ="SELECT * FROM user WHERE `email`='$email' OR `mobile`='$mobile'";
        $data = mysqli_query($con, $stmt);
        if ($data->num_rows > 0) {
            $row = mysqli_fetch_assoc($data);
            header("location:register.php?error=Email ID or Mobile Number Already Registered!");
        }
    else{
    // if ($con) {

       // $stmt = "SELECT `brand_name` FROM `brand_tbl` WHERE `brand_name`='$brandname' AND `status`='1'";
        //print_r($stmt);exit;
        //$i = 0;

       // $data = mysqli_query($con, $stmt);
        // print_r($data);exit;
        //if ($data->num_rows == 0) {
        $stmt = "INSERT INTO `user`(`name`, `mobile`, `email`, `age`, `dob`, `gender`, `address`, `subscription`, `transaction_id`, `username`, `password`,`status`) 
                VALUES ('$name','$mobile','$email','$age','$dob','$gender','$address','$subscription','$transaction','$uname','$password','0')";
            $done = mysqli_query($con, $stmt);
            //print_r($stmt);exit;
            if ($done) {
                header("location:index.php");
               // return 0;
            } else {
                echo "Sorry User not Registered";
                return 1;
            }
        // } else {
        //     return 2;
        // }
    }
 } else {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_close($con);
}


if(isset($_POST['Login']))
{

    $uname=$_POST['email'];
    $password=$_POST['password'];

    if($uname=='admin')
    {

    }
    else{
        $con = connectDB();
        $data = "";
        if($con)
        {
            $stmt ="SELECT * FROM user WHERE `email`='$uname' AND `password`='$password'";
            $data = mysqli_query($con, $stmt);
            if ($data->num_rows > 0) {
                $row = mysqli_fetch_assoc($data);
                $_SESSION['uname'] = $row['username'];
                header("location:plans.php?error=WELCOME LOGIN SUCCESS!");
                echo "<script type='text/javascript'>alert(' Welcome Successfully Login');</script>";
        }
        else{
            header("Location: adminLogin.php?error=Incorrect Details.. Try again!");
           // header("location:adminLogin.php");
          
        }
    }
    else {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_close($con);
    }

}

if(isset($_POST['Reset']))
{

    //$uname=$_POST['email'];
    $password=$_POST['password'];
    $id;

        $con = connectDB();
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