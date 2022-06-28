<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

<html>
<head>
<title>PHP Login & Register</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body style="background-image: url(../img/backcof1.jpg); background-position:center; width: 100%; height:150%; ">
    <div class="container">
        <a href="logout.php">Logout</a>
        <div style="width: 500px; margin: 100px auto; padding: 50px; background-color:brown; color: white;">
           <h3>Welcome <?php echo $_SESSION['username']; ?></h3
        </div>
    </div>
</body>
</html>