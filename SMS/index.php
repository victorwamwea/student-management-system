<?php
error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
    $message=$_SESSION['message'];

echo "<script type='text/javascript'>
    
    alert('$message');
    </script>";
}

$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

$sql="SELECT* FROM teacher";

$result=mysqli_query($data,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet type="css" href="style.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <label>W-schools</label>

        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact us</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php"class=" btn btn-succeess">Login</a></li>
        </ul>
    </nav>
    <div class="section1">
        <label class="img_text">We teach students with care </label>
        <img class="main_img" src="school_management.jpg">
    </div>
    <div class="container">
        <div class="row">
            <div class=" col-md-4">
                <img class="welcome_img" src="school2.jpg">
            </div>
            <div class="col-md-8">
                <h1>Welcome to W-school</h1>
                <p> we are committed to give you nothing but the best</p>
            </div>
</div>
</div>
<center>
    <h1>Our teachers</h1>
</center>
<div class="container">
    <div class="row">
        <?php
        while($info=$result->fetch_assoc())

        {
        ?>
        <div class="col-md-4">
            <img class= "teacher"src="<h3><?php echo "{$info['image']}" ?></h3>">
           <h3><?php echo "{$info['name']}" ?></h3>
           <h5><?php echo "{$info['description']}" ?></h5>
        </div>
        <?php
        }
        ?>
      
</div>
</div>
<center>
    <h1>Our Courses</h1>
</center>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class= "teacher"src="web.jpg">
           <h3>Web Development</h3>
        </div>
        <div class="col-md-4">
        <img class= "teacher" src="graphic.jpg">
        <h3>Graphic Design</h3>
        </div>
        <div class="col-md-4">
        <img class= "teacher" src="marketing.png">
        <h3>Digital marketing </h3>
        </div>
</div>
</div>

    <center>
        <h1 class="adm">Admission Form </h1>
    </center>
    <div align="center" class="admission_form">
        <form action="data_check.php" method="POST">
            <div class="adm_int">
                <label class="label_text">Name</label>
                <input class="input_deg" type="text" name="name">
            </div>
            <div class="adm_int">
                <label class="label_text" >email</label>
                <input class="input_deg" type="text" name="email">
            </div>
            <div class="adm_int">
                <label class="label_text">phone</label>
                <input class="input_deg" type="text" name="phone">
            </div>
            <div class="adm_int">
                <label class="label_text">messages</label>
                <textarea class="input_txt"name="messages"></textarea>
            </div>
            <div class="adm_int">
                
                <input class="btn btn-primary" id="submit" type="submit" value="apply"name="apply" >
            </div>
        </form>
    </div>
    <footer>
        <h3 class="footer_text">All rights reserved by web technology solutions </h3>
    </footer>
</body>
</html>