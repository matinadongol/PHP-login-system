<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Welcome - <?php echo  $_SESSION['username']?></title>
  </head>
  <body>
    <?php require 'partials/_nav.php'?>
   
    <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">
            Welcome - <?php echo $_SESSION['username']?>
            </h4>
            <p>Heyy! How you doing?</p>
            <p class="mb-0">Whenever you need to, be sure to <a href="logout.php">Logout</a></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>