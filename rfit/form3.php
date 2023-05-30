<?php
$conn=new mysqli('sql304.epizy.com','epiz_34074149','PE1lXAJcbVr','epiz_34074149_rfit');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
 
session_start(); 

$user=$_SESSION['username'];
$mail=$_SESSION['email'];
$pass=$_SESSION['pass'];
$lname=$_SESSION['lname'];
$fname=$_SESSION['fname'];
$dob=$_SESSION['dob'];
$gender= $_SESSION['gender'];
$weight=$_SESSION['weight']; 
$height=$_SESSION['height'];

    // print_r($_SESSION);
    $hash = password_hash($_SESSION['pass'], PASSWORD_DEFAULT);
  
    $sql = "INSERT INTO `client`( `password`,`fname`, `email`,`username`,`lname`,`dob`, `gender`,`weight`, `height`,`date_of_joining`) 
    VALUES (
     '$hash',  
     '$fname',     
     '$mail',
     '$user',
     '$lname', 
    '$dob',
    '$gender',
    '$weight', 
    '$height',
    current_timestamp()
    )";
$result = mysqli_query($conn, $sql);

// session_destroy();  
if ($result){

$sql1="SELECT height,weight,user_id,gender,date_of_joining FROM `client` WHERE username='$user'";
$result1 = mysqli_query($conn, $sql1);
// print_r($result1);
if ($result1->num_rows > 0) {
    while($row = $result1->fetch_assoc()) {

         $ht= $row["height"]; 
          $wt=$row["weight"]; 
        //   $g=$row["gender"];      
        $id=$row["user_id"];          
        $g=$row["gender"]; 
        $joined=$row["date_of_joining"];          
    }
    // echo $ht;
    // echo $wt;
    // echo $g;
    $bmi=($wt*10000)/($ht*$ht);
    $underwt=18.5*($ht*$ht)/10000;
    $overwt=24.9*($ht*$ht)/10000;
    if($bmi<18.5){
        $t_wt=$underwt;
        if($g=="F"){
            $cal_limit=2500;
            $ex_limit=320;
        }
        else{
            $cal_limit=3100;
            $ex_limit=350;
        }
    }
    elseif($bmi>24.9){
        $t_wt=$overwt;
        if($g=="F"){
            $cal_limit=1450;
            $ex_limit=500;
        }
        else{
            $cal_limit=1950;
            $ex_limit=500;
        }
    }
    else{
        if($g=="F"){
            $cal_limit=2000;
            $ex_limit=450;
        }
        else{
            $cal_limit=2500;
            $ex_limit=435;
        }
    }
}
    ?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered succesfully</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
 
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Phudu:wght@400;500&family=Sulphur+Point:wght@300&family=Suwannaphum&family=Tilt+Neon&display=swap"
        rel="stylesheet">

<style>
    #ok{
    float:right;
    /* margin-right:7%; */
    background-color: #ff44a8;
    color: white;
  }
  #ok:hover {
    /* border-color: lightpink; */
    background-color: lightpink;
    /* color:black; */
  }
</style>
</head>

<body>

    <!-- <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom: 0px;"> -->

    <section class="h-100" style="display:flex; justify-content: center; ">
    <div class="row row-cols-md-2 row-cols-1">
                <div class="col" style="padding-top:3%; padding-right: 2%; padding-bottom:1%; ">
                    <img src="images/undraw_exciting_news_re_y1iw.svg" alt="" width="62%">
                </div>
                <div class="col" style="padding-top:15%;  padding-right: 0px;">
                    <!-- <div class="container"> -->

                    <!-- </div> -->
                    <span class="glyphicon glyphicon-ok-sign fs-2"></span>
        <strong class="fs-2"> Registeration Successfull!</strong> 
    <div class="fs-3">
    <?php
    echo "<br>";
    echo "Your BMI is: ";
    echo $bmi;
    echo "<br>";
    echo "The healthy BMI range for adults is 18.5-24.9.";
    echo "<br>";
    if($bmi<18.5){
        $target="Gain Weight";
        $sql2="UPDATE `client` SET `target`='$target' WHERE `client`.`username`='$user'";
        $result2 = mysqli_query($conn, $sql2);
        echo "Since your bmi falls in the underweight range, we are setting your target as-";
        echo $target;
        //need target weitgh
        $sql11="INSERT INTO `food_tracker`( `tracker_id`, `target_cals`) VALUES ('$id', '$cal_limit')";
        $result11 = mysqli_query($conn, $sql11);
        $sql12="INSERT INTO `exercise_tracker`( `tracker_id`, `target_cals`) VALUES ('$id', '$ex_limit')";
        $result12 = mysqli_query($conn, $sql12);
        $sql13="INSERT INTO `weight_tracker`( `tracker_id`, `target_weight`,`updated_on`,`weight`) 
        VALUES ('$id', '$t_wt','$joined','$weight')";
        $result13 = mysqli_query($conn, $sql13);
        $sql14="INSERT INTO `water_tracker`( `tracker_id`) VALUES ('$id')";
        $result14 = mysqli_query($conn, $sql14);
    }
    elseif ($bmi>24.9) {
        $target="Lose Weight";
        $sql2="UPDATE `client` SET `target`='$target' WHERE `client`.`username`='$user'";
        $result2 = mysqli_query($conn, $sql2);
        echo "Since your bmi falls in the overweight range, we are setting your target as-";
        echo $target;
        $sql11="INSERT INTO `food_tracker`( `tracker_id`, `target_cals`) VALUES ('$id', '$cal_limit')";
        $result11 = mysqli_query($conn, $sql11);
        $sql12="INSERT INTO `exercise_tracker`( `tracker_id`, `target_cals`) VALUES ('$id', '$ex_limit')";
        $result12 = mysqli_query($conn, $sql12);
        $sql13="INSERT INTO `weight_tracker`( `tracker_id`, `target_weight`,`updated_on`,`weight`) 
        VALUES ('$id', '$t_wt','$joined','$weight')";
        $result13 = mysqli_query($conn, $sql13);
        $sql14="INSERT INTO `water_tracker`( `tracker_id`) VALUES ('$id')";
        $result14 = mysqli_query($conn, $sql14);
    }
    else{
        $target="Maintain Weight";
        $sql2="UPDATE `client` SET `target`='$target' WHERE `client`.`username`='$user'";
        $result2 = mysqli_query($conn, $sql2);
        echo "Your bmi is in the healthy range! We are setting your target as-";
        echo $target;
        $sql11="INSERT INTO `food_tracker`( `tracker_id`, `target_cals`) VALUES ('$id', '$cal_limit')";
        $result11 = mysqli_query($conn, $sql11);
        $sql12="INSERT INTO `exercise_tracker`( `tracker_id`, `target_cals`) VALUES ('$id', '$ex_limit')";
        $result12 = mysqli_query($conn, $sql12);
        $sql13="INSERT INTO `weight_tracker`( `tracker_id`, `target_weight`,`updated_on`,`weight`) 
        VALUES ('$id', '$wt','$joined','$weight')";
        $result13 = mysqli_query($conn, $sql13);
        $sql14="INSERT INTO `water_tracker`( `tracker_id`) VALUES ('$id')";
        $result14 = mysqli_query($conn, $sql14);
    }
 } 

echo "<br>";
    ?>
    <br>
    <h2>
        You can now <a href="login.php">log into your account</a>  and begin tracking!
    </h2>
    </div>
    <button type="button" class="btn fs-3" id="ok"> 
        <a style="color:white" href="index.php">Ok</a>
        </button>

                </div>
            </div>
    
    
    </section>

 <script type="text/javascript" src="signup_part2.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script> 
   
</body>

</html>