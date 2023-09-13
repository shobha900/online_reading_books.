<?php


session_start();
if(!isset($_SESSION['username'])){
echo "you not belong to here";

header('location:login.php');}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel ="stylesheet" href="style.css" >
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Satisfy&display=swap" rel="stylesheet">

</head>
<body>

<?php
include 'menu.php';
?>



<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="l1.jpg" alt="" width="1100" height="500">
      <div class="carousel-caption">
        
        <h1>"There is some good in this world, and it’s worth fighting for.” </h1>
        <p>~J.R.R. Tolkien, The Two Towers</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="l2.webp" alt="" width="1100" height="500">
      <div class="carousel-caption">
        
       <h1>“Memories warm you up from the inside. But they also tear you apart.” </h1>
       <p>~ Haruki Murakami, Kafka on the Shore</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="l3.jpg" alt="" width="1100" height="500">
      <div class="carousel-caption">
        
       
      <h1>"Books are a uniquely portable magic."</h1>
        <p>~Stephen King</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>




<!-----------------------------------------------------------------footer-------------------->


<footer>

<p class ="p-3 bg-dark text-white text-center"> @See you again :) </p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>